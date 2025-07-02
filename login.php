<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - StockEasy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/main.css">
    <style>
        .log-login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        }

        .log-header {
            margin: -2rem -2rem 2rem -2rem;
            padding: 2rem;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }

        .log-header h2 {
            margin: 0;
            font-size: 1.8rem;
        }

        .log-form input {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid var(--accent-color);
            border-radius: 4px;
            
        }

        .log-btn {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .log-btn:hover {
            background-color: #7252f1;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 4px;
            border: 1px solid #f5c6cb;
            text-align: center;
        }

        .log-inscription{
            margin-top: 1rem;
            color: black;
            display: flex;
            width: 100%;
            justify-content: center;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="log-login-container">
        <div class="log-header">
            <h2>Connexion</h2>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <div class="error-message">
                <?php echo htmlspecialchars($_GET['error']); ?>
            </div>
        <?php endif; ?>

        <form class="log-form" action="process_admin_auth.php" method="POST">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="role">Fonction (parent,famille,professionnel de santé...)</label>
                <input type="role" id="role" name="role" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="log-btn">Connexion</button>
            <a href="inscription.php" class="log-inscription">S'inscrire</a>
        </form>
    </div>
</body>
</html>