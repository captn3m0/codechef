---
{"category_name":"easy","problem_code":"CHAIRS","problem_name":"Chairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"errichto","date_added":"14-02-2017","tags":{"0":"cook79","1":"kingofnumbers","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CHAIRS","time":{"view_start_date":1487529000,"submit_start_date":1487529000,"visible_start_date":1487529000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/mandarin/CHAIRS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/russian/CHAIRS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK79/vietnamese/CHAIRS.pdf">Vietnamese</a> as well.</h3>

<p>
There are <b>N</b> chairs placed in circular order. Some of the chairs are empty while others have a child sitting in it. You are required to change the places of the children so that all the children sit next to each other (i.e. they form a connected segment). You can do that by doing the following operation a number of times:</p>

<p>
Choose a child and tell him to walk around the circle in clockwise order or anti-clockwise order until he finds the first empty chair, and tell him to sit there.</p>

<p>
What is the minimum number of operations required to make all children sit next to each other?
</p>


<h3>Input</h3>
<p>
The first line contains <b>T</b>, the number of test-cases.</p>
<p>
The first line of each test-case contains <b>N</b>, the number of chairs.</p>

<p>The second line of each test-case contains a binary string of length <b>N</b>. If the <b>i</b>-th character is 1 then the <b>i</b>-th chair has a child initially. Otherwise (i.e. the <b>i</b>-th character is 0) it's empty.
</p>

<h3>Output</h3>
<p>For each test case, output a single line containing a single integer donating minimum number of operations needed.</p>


<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5,000</b></li>
<li><b>1</b> ≤ sum of <b>N</b> in all test-cases ≤ <b>10<sup>6</sup></b></li>
<li>at least one chair will be occupied</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
8
10001010

<b>Output:</b>
2
</pre>

<h3>Explanation</h3>
<p>The initial configuration is:
<pre>       
                 <b>1</b>
              0    0
           1          0
              0    0
                  1
</pre></p>
<p>We can tell the child who is <b>boldened</b> to move counter-clockwise, and the new configuration will be:
<pre>       
                 0
              <b>1</b>    0
           1          0
              0    0
                  1
</pre></p>
<p>because he has moved to the first empty chair on his way.</p>

<p>Now, we again tell him to move counter-clockwise, and now the new configuration will be:
<pre>       
                 0
              0    0
           1          0
              <b>1</b>    0
                  1
</pre></p>
<p>because he moved counter-clockwise, found an occupied chair, and hence kept moving. The next chair was vacant, and he sat down there.</p>

<p>Note that, in this example, we moved the same child twice, but this need not be the case. We can move different children in different moves.
</p>
<p>
You can check that this is the best we can do, and 2 is the minimum.
</p>