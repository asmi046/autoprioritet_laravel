<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use App\Models\Blog\Blog;

use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Page>
 */
class BlogResource extends ModelResource
{
    protected string $model = Blog::class;
    protected string $title = 'Полезные материалы';
    protected string $column = 'title';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Название', 'title'),
                Slug::make('Окончание сылки', 'slug')->hideOnIndex(),
                Image::make('Основное изображение', 'img')->dir('blog'),
                TinyMce::make('Описание', 'description')->hideOnIndex(),
                Text::make('SEO заголовок', 'seo_title')->hideOnIndex(),
                Textarea::make('SEO описание', 'seo_description')->hideOnIndex()
            ]),
        ];
    }

    /**
     * @param Page $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
