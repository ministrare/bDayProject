<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Welkom <?=$surName?> <?=$lastName?></h1>
        </div>
        <div class="col-6">
            <h2 class="h3 mb-3 font-weight-normal">Vul je meest favoriete nummers in</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="inputArtist1">Artiest:</label>
                    <input id="inputArtist1" type="text" name="artist1" class="form-control" placeholder="vb. Ed Sheeran ft. Andrea Bocelli">
                </div>

                <div class="form-group">
                    <label for="inputTitle1">Titel:</label>
                    <input id="inputTitle1" type="text" name="song1" class="form-control" placeholder="vb. Perfect">
                </div>

                <div class="form-group">
                    <label for="inputUrl1">Youtube link:</label>
                    <input id="inputUrl1" type="text" name="url1" class="form-control" placeholder="vb. https://www.youtube.com/watch?v=eiDiKwbGfIY">
                </div>
                <div class="form-group">
                    <label for="inputMessage">Bericht:</label><br>
                    <textarea id="inputMessage" name="message" rows="3" cols="45"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Verzend gegevens</button>
                </div>
            </form>
        </div>
        <div class="col-6">
            <iframe style="height: 67%; width: 100%" src="https://www.youtube.com/embed/op07UzSCu4c"></iframe>
            <table class="table table-dark table-striped table-bordered table-hover table-sm table-responsive-sm">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Title</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ed Sheeran ft. Andrea Bocelli</td>
                    <td>Perfect</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>AC/DC</td>
                    <td>It's a long way to the top</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Queen</td>
                    <td>Somebody to love</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="col-12">

    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log uit</button>
</div>
