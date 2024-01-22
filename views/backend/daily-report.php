<div class="card !border-0 card-border">
    <div class="card-body card-gutterless p-4">
        <div class="tabs">
            <div role="tablist" class="tab-list tab-list-underline">
                <button class="tab-nav tab-nav-underline active" data-bs-toggle="tab" data-bs-target="#safe-360-tab-pane" role="tab" aria-selected="true" tabindex="0">
                    Safe 360
                </button>
                <button class="tab-nav tab-nav-underline" data-bs-toggle="tab" data-bs-target="#dd-account-tab-pane" role="tab" aria-selected="false" tabindex="0">
                    Direct Debit Account
                </button>
                <button class="tab-nav tab-nav-underline" data-bs-toggle="tab" data-bs-target="#tank-level-tab-pane" role="tab" aria-selected="false" tabindex="0">
                    Tank Level
                </button>
                <button class="tab-nav tab-nav-underline" data-bs-toggle="tab" data-bs-target="#loading-tab-pane" role="tab" aria-selected="false" tabindex="0">
                    Loading
                </button>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="safe-360-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <?php include __DIR__ . '/tabs/safe-360.php' ?>
                </div>
                <div class="tab-pane fade" id="dd-account-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <?php include __DIR__ . '/tabs/direct-debit-account.php' ?>
                </div>
                <div class="tab-pane fade" id="tank-level-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                    <?php include __DIR__ . '/tabs/tank-level.php' ?>
                </div>
                <div class="tab-pane fade" id="loading-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                    <?php include __DIR__ . '/tabs/loading.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>