## Layouts
Layouts are the building blocks that allow publishers to stack content that do unique things.

* Individual layouts are managed in **separate field groups.**
* Layouts are **cloned** into using ACF's flexible content.

*Note: It is important that you never create new fields inside of the master Layout field group. You should only clone layouts into the master field group.*

| Layout Names | Description |
| --------- | ----------- |
| Accordion | Uses title, content, and link |
| Basic Content | Uses WYSIWYG |
| Cards | Uses title, content, image, link |
| CTA | Uses title, content, image, link. |
| Hero | Uses image, title, subtitle, and link. |
| List | Uses relationship, creates static or filterable lists. |
| Pricing | Uses title, content, link. |
| Schedule | Uses title, WYSIWYG, link. |
| Slider | Uses title, content, link, and image. |
| Tabbed Content | Uses title, content, link. |

#### How to use layouts inside the template
The following code example will look for a files inside of the layouts directory i.e. layouts/layout-accordion.php
``` php
if(have_rows('layouts')) : while (have_rows('layouts')) : the_row();
    $layout_type = get_row_layout();
    include(locate_template('layouts/layout-' . $layout_type . '.php'));
endwhile; endif;
```

---

# Common Plugins
The following is a list of common plugins that we use on projects

| Plugin Names |
| --------- |
| ACF Content Analysis for Yoast SEO |
| ACF Flexible Content Modal |
| ACF to REST API |
| Admin Columns Pro |
| Advanced Custom Fields PRO |
| Compress JPEG & PNG images |
| Gravity Forms |
| Redirection |
| SearchWP |
| User Role Editor Pro |
| WP All Import Pro |
| Yoast SEO |
