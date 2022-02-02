---
{"category_name":"easy","problem_code":"CHSTAMP","problem_name":"Chef and collection of stamps","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"eartemov","problem_tester":"iscsi","date_added":"28-07-2015","tags":{"0":"connected","1":"eartemov","2":"easy","3":"graph","4":"nov15"},"editorial_url":"http://discuss.codechef.com/problems/CHSTAMP","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/CHSTAMP.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/CHSTAMP.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/CHSTAMP.pdf">Vietnamese</a> as well.</h3>
<p>Chef has a collection of <b>N</b> postage stamps. Each stamp belongs to some type, which are enumerated as positive integers. More valuable stamps have a higher enumerated type. So, type <b>1</b> is the least valuable type of stamps, type <b>2</b> is a bit more valuable, and so on.</p>
<p>Chef often communicates with other philatelists via a stamp exchange website called P-bay. On any particular day, P-bay lists several offers, each of which is represented as an unordered pair {<b>A</b>, <b>B</b>}, allowing its users to exchange stamps of type <b>A</b> with an equal number of stamps of type <b>B</b>. Chef can use such an offer to put up any number of stamps of enumerated type <b>A</b> on the website and get the same number of stamps of type <b>B</b> in return, or vice-versa (of course, he must have enough stamps of the corresponding type). Assume that any number of stamps Chef wants are always available on the site's exchange market. Each offer is open during only one day: Chef can't use it after this day, but he can use it several times during this day. If there are some offers which are active during a given day, Chef can use them in any order.</p>
<p>Chef is interested in making his collection as valuable as possible. Help him to find maximum possible value of his collection after going through (accepting or declining) all the offers. Value of Chef's collection is equal to the sum of type enumerations of all stamps in the collection.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The  description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two integers <b>N</b> and <b>M</b> denoting number of stamps in Chef's collection and number of offers, respectively.</p>
<p>Next line contains <b>N</b> integers denoting the enumerated types of stamps in Chef's collection.</p>
<p>The <b>i<sup>th</sup></b> of the following <b>M</b> lines contains three integers — <b>T<sub>i</sub></b>, <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b> — denoting that on day <b>T<sub>i</sub></b>, there is an offer about exchanging stamps of types <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing maximum possible value of Chef's collection after all offers.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2*10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>5*10<sup>4</sup></b></li>
<li>Types are enumerated with integers from <b>1</b> to <b>5*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>T<sub>i</sub></b> ≤ <b>5*10<sup>4</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask 1: (33 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li>Types are enumerated with integers from <b>1</b> to <b>1000</b></li>
<li><b>1</b> ≤ <b>T<sub>i</sub></b> ≤ <b>1000</b></li>
</ul>

<p><b>Subtask 2: (67 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>

1
3 4
1 3 5
1 4 3
1 1 3
2 6 22
3 5 8

<b>Output:</b>

16

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Chef can use <b>2<sup>nd</sup></b> offer to exchange the stamp of type <b>1</b> with an stamp of type <b>3</b>. After that he can use <b>1<sup>st</sup></b> offer to exchange his 2 stamps of type <b>3</b> with 2 stamps of type <b>4</b>. Finally, on <b>3<sup>rd</sup></b> day Chef uses the offer to exchange the stamp of type <b>5</b> with an stamp of type <b>8</b>. After this transaction, value of his collection becomes <b>4 + 4 + 8 = 16</b>.</p>
