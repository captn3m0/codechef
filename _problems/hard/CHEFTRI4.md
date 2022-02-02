---
{"category_name":"hard","problem_code":"CHEFTRI4","problem_name":"Chef and Triangles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"tuananh93","date_added":"9-12-2016","tags":{"0":"ad","1":"cook77","2":"geometry","3":"hard","4":"mgch"},"editorial_url":"https://discuss.codechef.com/problems/CHEFTRI4","time":{"view_start_date":1482085800,"submit_start_date":1482085800,"visible_start_date":1482085800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/mandarin/CHEFTRI4.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/russian/CHEFTRI4.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK77/vietnamese/CHEFTRI4.pdf">Vietnamese</a> as well.</h3>

<p>Can you make one big triangle using four triangles? You can gum up two figures by common side(for instance, you have 2 triangles (3, 4, 5), (3, 4, 5) you can make triangle (5, 5, 6) if gum them up with side 4, or (5, 5, 8) with side 3). Common side can be not equal.</p>

<h3>Input</h3>
<p>First line of the input contains <b>T</b> - number of test cases. <b>T</b> test cases follows.</p>
<p>First line of each test case containing three positive integers - side of first triangle, second line - sides of second triangle, third - sides of third triangle, and fourth - sides of fourth triangle.</p>

<h3>Output</h3>
<p>For each test case, output "Yes" if possible somehow to gum up triangles into big one, and "No" otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ sides of each triangle ≤ <b>1000</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
3 4 5
5 4 3
3 4 5
4 3 5
238 185 87
109 87 28
156 109 53
303 156 153
37 20 19
80 60 100
72 80 136
37 136 164
259 210 91  
259 182 105   
168 117 75   
30 28 26

<b>Output:</b>
Yes
Yes
No
Yes

</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> We can obtain (6, 8, 10). </p>
<p><b>Example case 2.</b> We can obtain (182, 303, 472). </p>
<p><b>Example case 4.</b> We can obtain (168, 259, 259). </p>