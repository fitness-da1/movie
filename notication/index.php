<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÀI LIỆU REAL TIME</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js"></script>
    <script src="https://tuanori.com/assets/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    <script src="https://tuanori.com/assets/js/pusher.js"></script>
<script src="https://js.pusher.com/3.2/pusher.min.js"></script>
        <script type="text/javascript">
            var pusher = new Pusher('10d5ea7e7b632db09c72', {
                encrypted: true
            });
            var channel = pusher.subscribe('user');
            channel.bind('realtime', function (data) {
                    console.log(data.message);
                    if(data.message) {
                        if(data.type == 'success') {
                        }
                            swal(data.title, data.message, data.type);
                    }
                });
        </script>
</body>
</html>


