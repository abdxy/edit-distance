<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
      <section class="hero is-primary is-fullheight">
          <div class="hero-body">
              <div class="container">
                <div class="columns is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="column">
                        <form class="box" method="post" action="calculateDistance.php">
                            <div class="field has-text-centered">
                            <h1 class="title is-4" style="color:#000">Edit Distance</h1>
                            </div>
                            <div class="field">
                                <label class="label">first String</label>
                                    <input name='str1' type="text" class="input" placeholder="opensooq" required> 
                            </div>
                            <div class="field">
                            <label class="label">second String</label>
                                    <input name='str2' type="text" class="input" placeholder="opensouq" required>
                            </div>
                    
                            <div class="field">
                                <button class="button is-success">
                                    calculate
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
          </div>
      </section>
  </body>
</html>