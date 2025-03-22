<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
    <title>Document</title>
</head>
<body>
<div class="">
    <nav
        class="navbar is-dark container  px-5 py-3 is-flex is-flex-direction-row is-justify-content-space-between"
        role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item has-text-black-bold title is-3" href="#">
                📃️WsReports
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>
                <a class="navbar-item">
                    Documentation
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        More
                    </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item ">
                            About
                        </a>
                        <a class="navbar-item ">
                            Jobs
                        </a>
                        <a class="navbar-item ">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item ">
                            Report an issue
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container p-6">
    <div class="content">
        <h1 class="title is-1">WsReports</h1>
        <p class="subtitle">An internal reporting tool designed to streamline data collection, management, and reporting for WsStack projects.</p>

        <p>
            WsReports empowers teams to create dynamic forms, collect structured data, and generate insightful reports with minimal effort.
        </p>

        <h2 class="title is-2">Project Mission</h2>
        <p>
            The goal is to provide an **efficient** and **scalable** solution for creating, managing, and analyzing project-related reports. This system allows teams to:
        </p>
        <ul>
            <li>📝 **Create Custom Forms** – Define sections, fields, and validation rules.</li>
            <li>📊 **Collect & Manage Data** – Employees submit structured reports seamlessly.</li>
            <li>📑 **Generate Reports** – Export and analyze collected data effectively.</li>
        </ul>

        <blockquote>
            "A system should empower the user, not burden them with complexity."
            <br><cite>- Usman Zahid</cite>
        </blockquote>

        <h3 class="title is-3">Example Form</h3>

        <div class="field">
            <label class="label">Project Name</label>
            <div class="control">
                <input class="input" type="text" placeholder="Enter project name">
            </div>
        </div>

        <div class="field">
            <label class="label">Assigned Employee</label>
            <div class="control has-icons-left">
                <input class="input" type="text" placeholder="Enter employee name">
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
            </div>
        </div>

        <div class="field">
            <label class="label">Project Type</label>
            <div class="control">
                <div class="select">
                    <select>
                        <option>Amazon Product Research</option>
                        <option>Keyword Analysis</option>
                        <option>Performance Review</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="field">
            <label class="label">Report Details</label>
            <div class="control">
                <textarea class="textarea" placeholder="Enter report details"></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Status</label>
            <div class="control">
                <label class="radio">
                    <input type="radio" name="status">
                    Pending
                </label>
                <label class="radio">
                    <input type="radio" name="status">
                    Completed
                </label>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox">
                    I confirm the accuracy of this report.
                </label>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Submit Report</button>
            </div>
            <div class="control">
                <button class="button is-link is-light">Cancel</button>
            </div>
        </div>
    </div>

</div>

</body>
</html>
