<div class="container px-4 py-20">
  <div class="row">
    <div class="col-sm-4">
      <div class="container-chrono">
        <div class="header">
          <svg id="gradient" style="width: auto">
            <defs>
              <linearGradient
                id="linearGradient"
                x1="0%"
                x2="100%"
                y1="0%"
                y2="100%"
              >
                <stop offset="0%" stop-color="#B8D087"></stop>
                <stop offset="100%" stop-color="#00996D"></stop>
              </linearGradient>
            </defs>
            <text fill-opacity="1" y="36px">Timer Abbaye</text>
          </svg>
        </div>
        <div class="timer">
          <div class="spinner-container">
            <div class="spinner-mask"></div>
            <svg
              class="spinner"
              height="240px"
              viewBox="0 0 66 66"
              width="240px"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                class="path"
                cx="33"
                cy="33"
                fill="none"
                id="spineroo"
                r="30"
                stroke-cap="round"
                stroke-width=".5"
              ></circle>
            </svg>
          </div>
          <div class="outer-circle"></div>
          <div class="inner-circle"></div>
          <div class="timer-display">
            <svg id="gradient">
              <defs>
                <linearGradient
                  id="linearGradient"
                  x1="0%"
                  x2="100%"
                  y1="0%"
                  y2="100%"
                >
                  <stop offset="0%" stop-color="#B8D087"></stop>
                  <stop offset="100%" stop-color="#00996D"></stop>
                </linearGradient>
              </defs>
              <text fill-opacity="1" id="timer-display-time" y="36px">
                10:00
              </text>
            </svg>
          </div>
        </div>
        <div id="status"></div>
        <div id="action-title">
          <small>SETTINGS</small>
        </div>
        <div class="actions">
          <div class="set-timer">
            Durée de la session
            <div class="set-display">
              <span id="set-timer-display">10</span>
              min
            </div>
            <div class="minus-add">
              <div class="setting-button" id="minus-timer">-</div>
              <div class="setting-button" id="add-timer">+</div>
            </div>
          </div>
          <div class="set-break">
            Durée de la pause
            <div class="set-display">
              <span id="set-break-display">0</span>
              min
            </div>
            <div class="minus-add">
              <div class="setting-button" id="minus-break">-</div>
              <div class="setting-button" id="add-break">+</div>
            </div>
          </div>
        </div>
      </div>

      <div class="start" id="start-timer">Démarrer</div>
      <div class="start hidden" id="reset-timer">Réinitialiser</div>
    </div>
    <div class="col-sm-6 py-3">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead class="tbl-header">
          <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Variation</th>
            <th>Variation %</th>
            <th>+ <i class="fas fa-beer"></i></th>
          </tr>
        </thead>
        <tbody class="tbl-content">
          <tr>
            <td>1</td>
            <td>AUSTRALIAN COMPANY</td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
            <td>
              <a href="" class="btn">
                <i class="fas fa-beer btn-beer"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
            <td>
              <a href="" class="btn">
                <i class="fas fa-beer btn-beer"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>ADELAIDE</td>
            <td>$3.22</td>
            <td>+0.01</td>
            <td>+1.36%</td>
            <td>
              <a href="" class="btn">
                <i class="fas fa-beer btn-beer"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>4</td>
            <td>ADITYA BIRLA</td>
            <td>$1.02</td>
            <td>-1.01</td>
            <td>+2.36%</td>
            <td>
              <a href="" class="btn">
                <i class="fas fa-beer btn-beer"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>5</td>
            <td>AUSTRALIAN COMPANY</td>
            <td>$1.38</td>
            <td>+2.01</td>
            <td>-0.36%</td>
            <td>
              <a href="" class="btn">
                <i class="fas fa-beer btn-beer"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>6</td>
            <td>AUSENCO</td>
            <td>$2.38</td>
            <td>-0.01</td>
            <td>-1.36%</td>
            <td>
              <a href="" class="btn">
                <i class="fas fa-beer btn-beer"></i>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
