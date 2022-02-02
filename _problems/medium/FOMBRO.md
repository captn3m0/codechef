---
{"category_name":"medium","problem_code":"FOMBRO","problem_name":"Zombinatorial","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"anudeep2011","date_added":"11-11-2014","tags":{"0":"cook55","1":"devuy11","2":"dynamic","3":"mathematics","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/FOMBRO","time":{"view_start_date":1424025000,"submit_start_date":1424025000,"visible_start_date":1424025000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/mandarin/FOMBRO.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/russian/FOMBRO.pdf">Russian</a> as well.</h3>
<p>You are given a function f which is defined as :</p>
<p><img src = "https://codechef_shared.s3.amazonaws.com/download/COOK55/main_equation.png" width="65%" /> </p>
<p>Your task is to find the value of </p>
<p><img src = "https://codechef_shared.s3.amazonaws.com/download/COOK55/fraction.png" width="30%" /> <br /><br />
where <b>M</b> is given in input.</p>
<h3>Input Format</h3>
<p>First line contains <b>T</b>, the number of test cases.<br /><br />
First line of each test case contain 3 space separated integers <b>N</b>, <b>M</b> and <b>Q</b>.<br /><br />
Next <b>Q</b> line follows, each line contain <b>r</b>.</p>
<h3>Output Format</h3>
<p>For each test case, output <b>Q</b> lines, each line containing the required answer.<br /></p>
<h3>Constraints</h3>
<p>2 ≤ <b>N</b> ≤ 10<sup>6</sup><br /><br />
1 ≤ <b>M</b> ≤ 10<sup>9</sup><br /><br />
2 ≤ Sum of <b>N</b> over all test cases ≤ 10<sup>6</sup><br /><br />
1 ≤ Sum of <b>Q</b> over all test cases ≤ 2*10<sup>5</sup><br /><br />
1 ≤ <b>T</b> ≤ 10<sup>5</sup><br /><br />
1 &lt; <b>r</b> &lt; <b>N</b><br /></p>
<pre>
<b>Sample Input</b>
2
5 114 1
2
50 3874 3
31
17
21

<b>Sample Output</b>
72
3718
624
1144

</pre><h3>Explanation for first test case</h3>
<p>f[1] = 1<br /><br />
f[2] = 2<br /><br />
f[3] = 1*2<sup>2</sup> * 3 = 12<br /><br />
f[4] =1*2<sup>3</sup>*3<sup>2</sup>*4 = 8*9*4 = 288<br /><br />
f[5] = 1*2<sup>4</sup>*3<sup>3</sup>*4<sup>2</sup>*5 =34560<br /><br />
value of f[5] / (f[2]*f[3]) = 1440 and 1440 %114 is 72</p>
