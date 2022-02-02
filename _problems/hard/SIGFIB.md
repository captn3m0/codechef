---
{"category_name":"hard","problem_code":"SIGFIB","problem_name":"Team Sigma and Fibonacci","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":null,"date_added":"23-04-2014","tags":{"0":"aug14","1":"devuy11","2":"hard","3":"mathematics"},"editorial_url":"http://discuss.codechef.com/problems/SIGFIB","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/SIGFIB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/SIGFIB.pdf">Russian</a>.</h3>
<p><span style="font-size: small;">Sigma and Fibonacci were two geeky friends. As ACM ICPC is near, they have started forming teams. Sigma loved summing series and Fibonacci loved playing with fibonacci numbers. They made Gopu as their ACM ICPC Coach. To train them up, Gopu gave them a challenge which will require both of their coordination to solve it. The challenge given by Gopu is described below:</span></p>
<p><span style="font-size: small;">Gopu gave them two numbers <strong>M</strong> and <strong>N</strong> and asked them to solve : <br /><span style="font-size: medium;"> ( ∑ ( 6 * x * y * z * Fibo[x] * Fibo[y] * Fibo[z] ) ) % M , where x + y + z = N.<br /></span></span><span style="font-size: small;">Here x, y, z ≥ 0 and are integers.</span></p>
<p><span style="font-size: small;">Fibo is the Fibonacci number define as follows.<br /> </span></p>
<ul>
<li><span style="font-size: small;">Fibo[0] = 0</span></li>
<li><span style="font-size: small;">Fibo[1] = 1</span></li>
<li><span style="font-size: small;">Fibo[i] = Fibo[i-1] + Fibo[i-2] ∀  i ≥ 2 .<br /> </span></li>
</ul>
<p><span style="font-size: small;"> Now Gopu is wondering whether he will be able to determine whether they have calculated the solution of the problem correctly or not ! Help Gopu to find the correct answers , so that he can judge the solution for the team.<br /></span></p>
<h3><span style="font-size: small;">Input
<p></p></span><span style="font-size: small; font-weight: normal;"></span></h3>
<p>First line of input contains an integer <strong>T</strong> denoting the number of test cases. Each test case begins in a new line, containing two space separated numbers representing <strong>M</strong> and <strong>N</strong> respectively.</p>
<h3><span style="font-size: small;">Output</span></h3>
<p><span style="font-size: small;"> For each test case, output answer as stated above in a new line. <br /></span></p>
<h3><span style="font-size: small;">Constraints<br /></span></h3>
<ul>
<li><span style="font-size: small;">Sum of </span><strong>M</strong><span style="font-size: small;"> over all test cases will be ≤ 10</span><sup>6</sup><span style="font-size: small;">.</span></li>
<li><span style="font-size: small;">0 ≤ <strong>N ≤</strong>  10<sup>18</sup></span></li>
<li><span style="font-size: small;">1 ≤ <strong>M ≤</strong>  10<sup>5</sup></span></li>
</ul>
<h3><span style="font-size: small;">Example</span></h3>
<pre><span style="font-size: small;"><strong>Input:</strong>
4<br />100 3<br />100 4<br />100 9<br />100 10<br />
<strong>Output:</strong>
6<br />36<br />66<br />60<br />
</span></pre><h3><span style="font-size: small;">Explanation for first test case:</span></h3>
<p><span style="font-size: small;"> In the first case, we have the following 10 terms for <b>N</b> = 3:<br />6 * 0*0*3*Fibo[0] * Fibo[0] * Fibo[3]<br />6 * 0*1*2*Fibo[0] * Fibo[1] * Fibo[2]<br />6 * 0*2*1*Fibo[0] * Fibo[2] * Fibo[1]<br />6 * 0*3*0*Fibo[0] * Fibo[3] * Fibo[0]<br />6 * 1*0*2*Fibo[1] * Fibo[0] * Fibo[2]<br />6 * 1*1*1*Fibo[1] * Fibo[1] * Fibo[1]<br />6 * 1*2*0*Fibo[1] * Fibo[2] * Fibo[0]<br />6 * 2*0*1*Fibo[2] * Fibo[0] * Fibo[1]<br />6 * 2*1*0*Fibo[2] * Fibo[1] * Fibo[0]<br />6 * 3*0*0*Fibo[3] * Fibo[0] * Fibo[0]<br />Here 6*1*1*1* Fibo[1] * Fibo[1] * Fibo[1] = 6 is only the non-zero term, the answer is 6.<br /></span></p>
<p> </p>
