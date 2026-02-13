<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel
to run this project we have to run 2 server
npm run dev
php artisan serve
<img width="1081" height="853" alt="image" src="https://github.com/user-attachments/assets/f985c696-272b-452e-8b5d-faf3e36c392f" />
<img width="637" height="756" alt="image" src="https://github.com/user-attachments/assets/4b77f8b1-e59b-450b-a4c8-a0cdb1c29893" />
## Here’s the **clean, foolproof fix for Windows + Laravel + Tailwind + Vite**:

---

## ✅ Step 1: Rename PostCSS config

1. Go to your project:

```
C:/xampp/htdocs/Laravel-Project/
```

2. Rename:

```
postcss.config.js → postcss.config.cjs
```

* This tells Node **it’s CommonJS**, even though `package.json` says `"type": "module"`.

---

## ✅ Step 2: Make sure content uses CommonJS

Inside `postcss.config.cjs`:

```js
module.exports = {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
}
```

> Do **not** use `export default` here, use `module.exports`.

---

## ✅ Step 3: Remove old build (optional but safe)

```bash
rm -rf public/build
```

---

## ✅ Step 4: Run Vite

```bash
npm run dev
```

* You should see something like:

```
  Laravel Vite is running: http://127.0.0.1:5173
```

* Keep this terminal running while opening `http://127.0.0.1:8000` in browser.

---

## ✅ Step 5: Blade file

Make sure in `resources/views/welcome.blade.php` you have:

```blade
@vite('resources/css/app.css')
```

* Don’t point to `public/css` manually
* Vite handles compiling and injecting CSS

---

### ✅ Why this works

| Issue                                          | Fix                                                               |
| ---------------------------------------------- | ----------------------------------------------------------------- |
| `module is not defined`                        | Rename `.js` → `.cjs` for CommonJS                                |
| Node sees ES module because `"type": "module"` | `.cjs` ignores `"type": "module"` and works with `module.exports` |

---

💡 **Tip for Windows**:

* Always use **PowerShell** or **Windows Terminal**
* Keep `npm run dev` running for live reload

---

* Works with `"type": "module"`
* Has Tailwind ready
* Avoids **all PostCSS / Vite errors**

Then just run:

```bash
npm install
npm run dev
php artisan serve
```


## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
