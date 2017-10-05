# Famox Admin Interface

## To Do

- [ ] Proper error checking
- [ ] Intermediary views for Update
- [ ] Intermediary views for Delete
- [ ] Export clients to PDF
- [ ] Filter products by category
- [x] Update product prices in bulk
- [x] Documentation page
- [x] Dashboard page
- [x] Project Page
- [x] Update product's categories
- [x] "Display PHP Code" (add to Footer)
- [x] Login
- [x] Logout
- [x] Redesign login page
- [x] Sample Data (SQL)

# Deployment

1. Ensure `PRODUCTION` is set to `true` in `config.php`
2. Copy files to Triton via FTP or `git`
3. Ensure the `product_images` directory is empty
4. Copy the files from `schema/images` into the empty `product_images` directory
5. Run the `famox.sql` script to create tables
6. Run the `sample_data.sql` script to fill tables with example data
7. Test to ensure everything is working correctly
8. Drop tables and re-run the `famox.sql` and `sample_data.sql` scripts to reset the database
