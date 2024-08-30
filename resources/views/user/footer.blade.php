<div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright © <span class="dynamic-year">2024-25</span> <a target="_blank" href="https://hcltech.com">HCLTech</a>, All rights reserved.</p>
    </div>
   
</div>
<script>
$(document).ready(function() {
	console.log(`ready`);
            $('#myForm').on('submit', function(event) {
                event.preventDefault();
                $('.loading').removeClass('hidden');
                this.submit(); // Uncomment to allow the form to submit after showing the loading indicator
            });
        });
</script>
