<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
</head>
<body>
<h2>Danh sách sinh viên</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Lớp</th>
        <th>Giới tính</th>
    </tr>
    @foreach($students as $index => $student)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->class }}</td>
        <td>{{ $student->gender }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
//OK
