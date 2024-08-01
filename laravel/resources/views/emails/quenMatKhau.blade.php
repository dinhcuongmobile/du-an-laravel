<p>Chào {{ $user->ho_va_ten }},</p>
<p>Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn. Bạn có thể đặt lại mật khẩu bằng cách nhấp vào liên kết dưới đây:</p>
<p><a href="{{ route('tai-khoan.dat-lai-mat-khau', ['token' => $token]) }}" class="btn">Đặt lại mật khẩu</a></p>
<p>Nếu bạn không yêu cầu đặt lại mật khẩu, vui lòng bỏ qua email này.</p>
<p>Trân trọng,</p>
<p>Đội ngũ hỗ trợ của chúng tôi</p>

