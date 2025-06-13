<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use \App\Traits\ModelMethod;

class Blog
{
    use ModelMethod;

    protected array $blogs = [];
    protected Collection $query;


    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected string $primaryKey = 'id';


    /**
     * The filename where the blogs data is stored in /storage/app folder.
     *
     * @var string
     */
    protected string $filename = 'data/blogs.json';


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected array $casts = [
        'id' => 'int',
        'title' => 'string',
        'slug' => 'string',
        'file' => 'string',
        'description' => 'string',
        'tags' => 'array',
        'active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    /**
     * Blog constructor.
     * Initializes the blogs collection from the JSON file.
     */
    public function __construct()
    {
        $jsondata = Storage::get($this->filename);
        $this->blogs = json_decode($jsondata) ?? [];

        $this->blogs = array_map(function($item){
            return $this->castAttributes((object)$item);
        }, $this->blogs);

        $this->query = collect($this->blogs);
    }

    

    /**
     * Reset the query collection
     */
    public function resetQuery()
    {
        $this->query = collect($this->blogs);
    }

    /**
     * Get all records.
     */
    public function all(): Collection
    {
        $this->resetQuery();
        return $this->query;
    }

    /**
     * Find a record by its primary key.
     */
    public function find($id): ?object
    {
        $this->resetQuery();
        return (object)$this->query->firstWhere($this->primaryKey, $id);
    }

    /**
     * Where clause.
     */
    public function where(string $key, string $operatorOrValue, ?string $value = null): static
    {
        $this->query = $this->query->filter(function ($item) use ($key, $operatorOrValue, $value) {

            if (is_null($value)) {
                $operator = '=';
                $compareTo = $operatorOrValue;
            } else {
                $operator = $operatorOrValue;
                $compareTo = $value;
            }

            $itemValue = $item->$key ?? null;

            return match($operator){
                '=', '==' => $itemValue == $compareTo,
                '!=' => $itemValue != $compareTo,
                '>' => $itemValue > $compareTo,
                '<' => $itemValue < $compareTo,
                '>=' => $itemValue >= $compareTo,
                '<=' => $itemValue <= $compareTo,
                'LIKE' => str_contains($itemValue, $compareTo),
                'NOT LIKE' => !str_contains($itemValue, $compareTo),
                default => false,
            };
        });

        return $this;
    }

    /**
     * Order the results by a specific key.
     */
    public function orderBy(string $key, string $direction = 'asc'): static
    {
        $this->query = $this->query->sortBy($key, SORT_REGULAR, strtolower($direction) === 'desc');
        return $this;
    }

    /**
     * Order the results by a timestamp.
     */
    public function latest(string $key = 'created_at'): static
    {
        $this->query = $this->query->sortByDesc($key);
        return $this;
    }

    /**
     * Order the results by a timestamp in ascending order.
     */
    public function oldest(string $key = 'created_at'): static
    {
        $this->query = $this->query->sortBy($key);
        return $this;
    }

    /**
     * Limit the number of results.
     */
    public function limit(int $count): static
    {
        $this->query = $this->query->take($count);
        return $this;
    }

    /**
     * Get the first result.
     */
    public function first(): ?object
    {
        $data = (object)$this->query->first();
        $this->resetQuery();
        return $data;
    }

    /**
     * Get the last result.
     */
    public function last(): ?object
    {
        $data = (object)$this->query->last();
        $this->resetQuery();
        return $data;
    }

    /** 
     * Get the result collection.
     */
    public function get(): Collection
    {
        $data = $this->query->values();
        $this->resetQuery();
        return $data;
    }

    /**
     * Convert the collection to an array.
     */
    public function toArray(): array
    {
        return $this->query->toArray();
    }

    /**
     * Get the count of the results.
     */
    public function count(): int
    {
        return $this->query->count();
    }

}
