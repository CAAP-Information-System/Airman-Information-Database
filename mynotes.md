# Laravel Project Notes

## Controller and Model Method
1. If table view does not show, call the name of `database_table_name`.
> To loop the resources from the database, you must state the first parameter as the `table_name` and the second parameter as the `loop_name`.

For example: 
@foreach( $transactins as $transact)
>Code content
@endforeach
2. Name of `Model` must be similar to `table_name`, plural not specified.
>An error occured because the model's function from the controller does not accept the stored output. Solution found was to replace the model's name depending on the table name.
## Blade Methods
1. `View` blades must be placed per folder as good practice for organizing particular templates for each functions.
