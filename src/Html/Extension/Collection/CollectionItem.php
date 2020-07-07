<?php

namespace Atom\Html\Extension\Collection;

use Atom\Util\ArgHelper;
use Atom\Util\ArrHelper;
use Atom\Util\StrHelper;

/**
 * ----------------------------------------------------------------------------------------------------
 * CollectionItem
 * ----------------------------------------------------------------------------------------------------
 *
 * @package  Atom\Html
 * @version  1.0.0
 */
class CollectionItem implements CollectionItemInterface
{
    /**
     * Name
     *
     * @var    string
     * @since  1.0.0
     */
    private $name;

    /**
     * Content
     *
     * @var    array
     * @since  1.0.0
     */
    private $content;

    /**
     * Construct
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __construct(
        $name = '', $content = []
    ) {
        $this->name = $this->toName(
            $name
        );

        $this->content = $this->toContent(
            $content
        );
    }

    /**
     * Clone
     *
     * @return void
     *
     * @since  1.0.0
     */
    public function __clone()
    {
        $this->name = $this->toName(
            $this->name
        );

        $this->content = $this->toContent(
            $this->content
        );
    }

    /**
     * Get name
     *
     * @return string
     *
     * @since  1.0.0
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Get content
     *
     * @return array
     *
     * @since  1.0.0
     */
    public function getContent() : array
    {
        return $this->content;
    }

    /**
     * Create
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function create(
        $name, $content
    ) : self {
        $this->name = $this->toName(
            $name
        );

        $this->content = ArrHelper::merge(
            $this->content, $this->toContent($content)
        );

        return $this;
    }

    /**
     * Update
     *
     * @param  string  $name
     * @param  array|string  $content
     *
     * @return $this
     *
     * @since  1.0.0
     */
    public function update(
        $name, $content
    ) : self {
        $this->name = $this->toName(
            $name
        );

        $this->content = $this->toContent(
            $content
        );

        return $this;
    }

    /**
     * To name
     *
     * @param  string  $input
     *
     * @return string
     *
     * @since  1.0.0
     */
    protected function toName(
        $input
    ) : string {
        return StrHelper::trim($input);
    }

    /**
     * To content
     *
     * @param  array|string  $input
     *
     * @return array
     *
     * @since  1.0.0
     */
    protected function toContent(
        $input
    ) : array {
        if(ArgHelper::isTypeString($input))
        {
            $input = StrHelper::replace(
                $input, '|', ['| ', ' | ', ' |']
            );

            $input = ArgHelper::explode(
                $input, '|'
            );
        }

        $input = ArrHelper::delete(
            $input, ['', ' ']
        );

        return $input;
    }
}
