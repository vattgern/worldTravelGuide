<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Админ-панель</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
      <div class="app-container">
          <div class="sidebar">
            <div class="sidebar-header">
              <div class="app-icon">
                  <img style="width: 100%;; height: 100px; object-fit: fill;" class="logo" src="../../images/Logo-light.svg" alt="">
              </div>
            </div>
            <ul class="sidebar-list">
              <li id="side-users" class="sidebar-list-item active">
                <a href="#">
                  <span class="material-symbols-outlined" style="margin-right: 4%;">
                      groups
                  </span>
                  <span>Пользователи</span>
                </a>
              </li>
              <li id="side-request" class="sidebar-list-item">
                <a href="#">
                  <span class="material-symbols-outlined" style="margin-right: 4%;">
                      assignment
                  </span>
                  <span>Заявки</span>
                </a>
              </li>
              <li id="side-subscribe" class="sidebar-list-item">
                <a href="#">
                  <span class="material-symbols-outlined" style="margin-right: 4%;">
                      subscriptions
                  </span>
                  <span>Подписки</span>
                </a>
              </li>
            </ul>
            <div class="account-info">
              <div class="account-info-picture">
                <img src="data:image/jpeg;base64,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" alt="Account">
              </div>
              <div class="account-info-name">Админ</div>
              <a href="../../functions/logout_admin.php"
                 style="display: flex;
                 justify-content: center;
                 align-items: center;
                 text-decoration: none;,
                 margin-left:2.5%;">
                <span class="material-symbols-outlined"
                      style="color: var(--sidebar-link);
                             transform: scale(-1)">
                  logout
                </span>
              </a>
            </div>
          </div>
          <div id="users" class="app-content">
              <div class="app-content-header">
                  <h1 class="app-content-headerText">Пользователи</h1>
                  <button class="mode-switch" title="Switch Theme">
                      <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                          <defs></defs>
                          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                      </svg>
                  </button>
              </div>

              <div class="app-content-actions">
                  <input class="search-bar" placeholder="Search..." type="text">
                  <div class="app-content-actions-wrapper">

                      <button class="action-button list active" title="List View">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                      </button>
                      <button class="action-button grid" title="Grid View">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                      </button>
                  </div>
              </div>

              <div class="products-area-wrapper tableView" style="margin-top: 2.5%;">
                  <!--   ---------------------------------------------------------------   -->
                  <!--  Верхняя Линяя типо сортировки    -->
                  <div class="products-header">
                      <div class="product-cell image">
                          Пользователи
                          <button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button>
                      </div>
                      <div class="product-cell category">Роль<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                      <!--        <div class="product-cell status-cell">Status<button class="sort-button">-->
                      <!--            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>-->
                      <!--          </button></div>-->
                      <!--        <div class="product-cell sales">Sales<button class="sort-button">-->
                      <!--            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>-->
                      <!--          </button></div>-->
                      <div class="product-cell stock">Редактировать<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                      <div class="product-cell price">Удалить<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                  </div>
                  <!--   ---------------------------------------------------------------   -->
                  <?php
                  require '../../functions/connect.php';
                  $sql = $connect->query("SELECT * FROM `users`");
                  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                      ?>
                      <div class="products-row">
                          <div class="product-cell image">
                              <img src="../../images/icons/person.svg" alt="product">
                              <span><?=$row['login']?></span>
                          </div>
                          <div class="product-cell category"><?
                              if($row['role'] == 1){
                                  echo 'Админ';
                              }
                              else{
                                  echo 'Пользователь';
                              }
                              ?></div>
                          <div class="product-cell stock"><a href="">Редактировать</a></div>
                          <div class="product-cell price"><a href="<?
                              if($row['role'] != 1){
                                  echo "../../functions/delete_user.php?id={$row['id']}";
                              }
                              ?>">Удалить</a></div>
                      </div>
                      <?php
                  }
                  ?>
              </div>
          </div>
          <div id="requests" style="display: none;" class="app-content">
              <div class="app-content-header">
                  <h1 class="app-content-headerText">Заявки</h1>
                  <button class="mode-switch" title="Switch Theme">
                      <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                          <defs></defs>
                          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                      </svg>
                  </button>
              </div>

              <div class="app-content-actions">
                  <input class="search-bar" placeholder="Search..." type="text">
                  <div class="app-content-actions-wrapper">

                      <button class="action-button lists active" title="List View">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                      </button>
                      <button class="action-button grids" title="Grid View">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                      </button>
                  </div>
              </div>

              <div class="products-area-wrappers tableView" style="margin-top: 2.5%;">
                  <!--   ---------------------------------------------------------------   -->
                  <!--  Верхняя Линяя типо сортировки    -->
                  <div class="products-header">
                      <div class="product-cell image">
                          Пользователи
                          <button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button>
                      </div>
                      <div class="product-cell category">Почта<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                      <div class="product-cell stock">Решение<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                      <div class="product-cell price">Удалить заявку<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                  </div>
                  <!--   ---------------------------------------------------------------   -->
                  <?php
                  require '../../functions/connect.php';
                  $sql = $connect->query("SELECT * FROM `excursion`");
                  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
                      ?>
                      <div class="products-row">
                          <div class="product-cell image">
                              <img src="../../images/icons/person.svg" alt="product">
                              <span><?=$row['full_name']?></span>
                          </div>
                          <div class="product-cell category"><?=$row['email']?></div>
                          <div class="product-cell stock"><a href="../../functions/succes.php?id=<?=$row['id']?>">Одобрить</a></div>
                          <div class="product-cell price"><a href="../../functions/del.php?id=<?=$row['id']?>">Удалить</a></div>
                      </div>
                      <?php
                  }
                  ?>
              </div>
          </div>
          <div id="subscribes" style="display: none;" class="app-content">
              <div class="app-content-header">
                  <h1 class="app-content-headerText">Подписки</h1>
                  <button class="mode-switch" title="Switch Theme">
                      <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                          <defs></defs>
                          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                      </svg>
                  </button>
              </div>

              <div class="app-content-actions">
                  <input class="search-bar" placeholder="Search..." type="text">
                  <div class="app-content-actions-wrapper">

                      <button class="action-button listss active" title="List View">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                      </button>
                      <button class="action-button gridss" title="Grid View">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                      </button>
                  </div>
              </div>

              <div class="products-area-wrapperss tableView" style="margin-top: 2.5%;">
                  <!--   ---------------------------------------------------------------   -->
                  <!--  Верхняя Линяя типо сортировки    -->
                  <div class="products-header">
                      <div class="product-cell image">
                          Пользователи
                          <button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button>
                      </div>
                      <div class="product-cell category">Почта<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                      <div class="product-cell price">Снять с подписки<button class="sort-button">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512"><path fill="currentColor" d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z"/></svg>
                          </button></div>
                  </div>
                  <!--   ---------------------------------------------------------------   -->
                  <?
                  require '../../functions/connect.php';
                  $sql = $connect->query("SELECT * FROM `subscribe`");
                  while($res = $sql->fetch(PDO::FETCH_ASSOC)){
                      ?>
                      <div class="products-row">
                          <div class="product-cell image">
                              <img src="../../images/icons/person.svg" alt="product">
                              <span><?=$res['full_name']?></span>
                          </div>
                          <div class="product-cell category"><?=$res['email']?></div>
                          <div class="product-cell price"><a href="../../functions/del_sub.php?id=<?=$res['id']?>">Убрать</a></div>
                      </div>
                      <?
                  }
                  ?>
              </div>
          </div>
      </div>

  <script  src="./script.js"></script>
  <script src="./sidebar.js"></script>
</body>
</html>
