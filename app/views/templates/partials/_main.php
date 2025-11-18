  <main class="mx-auto max-w-6xl px-4 py-8">
      <div class="grid gap-8 md:grid-cols-[3fr_1fr]">
        <!-- COLONNE PRINCIPALE -->
        <div class="space-y-10">
          <!-- 3 DERNIERS BOOKS -->
      <?php echo $content; ?>
        </div>

        <!-- ASIDE CATEGORIES -->
     <?php include '../app/views/templates/partials/_aside.php'; ?>
      </div>
    </main>