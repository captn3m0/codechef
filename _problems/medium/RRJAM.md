---
{"category_name":"medium","problem_code":"RRJAM","problem_name":"Jam","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"tuananh93","date_added":"7-09-2014","tags":{"0":"Rubanenko","1":"cook53","2":"hard","3":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/RRJAM","time":{"view_start_date":1419186758,"submit_start_date":1419186758,"visible_start_date":1419186758,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/mandarin/RRJAM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/russian/RRJAM.pdf">Russian</a> as well.</h3>
<p>Carlson has <b>N</b> jars of jam. They are numbered from <b>1</b> to <b>N</b> while <b>i<sub>th</sub></b> jar contains <b>A<sub>i</sub></b><br />
units of jam. Carslon believes that <b>i<sub>th</sub></b> jar should contain at least <b>B<sub>i</sub></b> units of jam. Unfourtunetly, it happens that <b>A<sub>i</sub></b> is less than <b>B<sub>i</sub></b>. To fix this issue Carlson adds jam by doing <b>M</b> operations. Each operation is defined by four numbers <b>l</b>, <b>r</b>, <b>x</b> and <b>y</b>. It means that Carlson adds <b>x</b> units of jam to the <b>l<sub>th</sub></b>, <b>x + y</b> units of jam to the <b>(l + 1)<sub>th</sub></b> jar, <b>x + 2y</b> units of jam to the <b>(l + 2)<sub>th</sub></b> jar,..., <b>x + (r - l)y</b> units of jam to the <b>r<sub>th</sub></b> jar. After it, Carlson would like to know for each jar <b>i</b> when it starts to contain at least <b>B<sub>i</sub></b> units of jam, i.e. the minimal number of adding operation that <b>i<sub>th</sub></b> jar contained less than <b>B<sub>i</sub></b> units of jam before it, but then started to contain at least <b>B<sub>i</sub></b> units of jam after the operation was applied. Have a look at the examples for better understanding.</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input contains single integer number <b>N</b>. Following line contains <b>N</b> numbers <b>A<sub>i</sub></b> — initial amount of jam in each jar. The next line contains integer number <b>M</b> — number of adding operations. Then <b>M</b> lines follow describing adding operations in chronological order. Every operation is defined by four numbers <b>l</b>, <b>r</b>, <b>x</b> and <b>y</b>.
</p>
<h3>Output</h3>
<p>You should output the answer for each jar separated by space. If it already contains enough jam you should output <b>0</b> as the answer, in case it doesn't even after all the operations output <b>-1</b> instead.</p>
<h3>Constraints</h3>
<p><b>1 ≤ N ≤ 10<sup>5</sup></b><br />
<b>1 ≤ M ≤ 10<sup>5</sup></b><br />
<b>0 ≤ A<sub>i</sub> ≤ 2*10<sup>9</sup></b><br />
<b>0 ≤ B<sub>i</sub> ≤ 2*10<sup>9</sup></b><br />
<b>0 ≤ x, y ≤ 10<sup>5</sup></b><br />
<b>0 ≤ l ≤ r ≤ N</b></p>
<h3>Example</h3>
<pre><b>Input:</b>
5
5 4 4 2 1
7 7 4 7 7
3
1 2 2 0
2 5 1 1
3 4 2 2

<b>Output:</b>
1 2 0 3 -1


</pre>