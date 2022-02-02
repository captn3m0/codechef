---
{"category_name":"challenge","problem_code":"CHEFJR","problem_name":"Chef and Job and Rest","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"14-09-2014","tags":{"0":"berezin","1":"challenge","2":"feb16","3":"greedy"},"editorial_url":"http://discuss.codechef.com/problems/CHEFJR","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/CHEFJR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/CHEFJR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/CHEFJR.pdf">Vietnamese</a> as well.</h3>


<p>Chef is working as a programmer. His job schedule is very interesting: he rests for <b>R<sub>0</sub></b> minutes, works for some time, then rests for <b>R<sub>1</sub></b> minutes, then works some more, and so on. </p>
<p>By the way, Chef has <b>M</b> books he wants to read. Each book has some given number of pages, and Chef reads one page per minute independent of which page of whichever book it is. Chef has two types of books to read: the first type are too interesting for an interrupted read and, therefore, need to be finished in one continuous reading session, that is, some <b>i</b><sup>th</sup> resting period or a part of it. Books of the second type are more casual reads which can be split up in any way between different resting periods (read a few pages, then read another book or do the job, and continue later). </p>
<p>Chef is getting tired when switch, that is why each book can be read for some times only <b>once</b> per rest. </p>
<p>Let us take an example: If Chef has a rest period array <b>R = {4,1,1}</b>, and books types to read: (<b>1<sup>st</sup></b>, <b>3</b> min), (<b>2<sup>nd</sup></b>, <b>3</b> min). Chef can finish the first book in the first rest period (minutes from <b>1<sup>st</sup></b> to <b>3<sup>rd</sup></b>), and use the <b>4<sup>th</sup></b> minute of first period, along with the second and third periods to finish the second book.</p>

<p>
Some books are part of a series, and need to be read in order. In other words, some books can't be started until some other books are done. You are given this information in the form of pairwise dependencies, indicating that one book cannot be started before the other is finished. Chef promises that there are no cycles across these directed dependencies.
Each book has a rating, expressed as a positive integer. When Chef finishes a book, his happiness increases by this number.
</p>

<h3>Scoring</h3>
<ul>
<li>For each test, your result will be defined as the sum of ratings of books you finish.</li>
<li>The total score for a submission is the sum of the scores for all test cases.</li>
<li>Your task is to maximize the total score.</li>
</ul>

<h3>Input</h3>
<ul>
<li>The first line of each test case contains three integers — <b>N</b> denoting the number of rest periods, <b>M</b> denoting the number of books, and <b>K</b> denoting the number of dependencies. The second line contains <b>N</b> space-separated integers <b>R<sub>1</sub></b>, <b>R<sub>2</sub></b>, …, <b>R<sub>N</sub></b> denoting the duration of each period.</li>
<li>Next <b>M</b> lines describe the books, with the <b>i</b><sup>th</sup> line describing the <b>i</b><sup>th</sup> book. Each line contains tree integers <b>T<sub>i</sub></b>, <b>P<sub>i</sub></b> and <b>W<sub>i</sub></b>. <b>T<sub>i</sub></b> is the type of the <b>i</b><sup>th</sup> book. <b>P<sub>i</sub></b> is the number of pages in it. <b>W<sub>i</sub></b> is the rating of the book.</li>
<li>Next <b>K</b> lines describe the inter-book dependencies. Each line contains two integers — <b>A</b> and <b>B</b> — denoting that book <b>A</b> should be finished before book <b>B</b> can be started. The books are indexed in the order of their description in the input.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each rest period, output a single line. The first integer in the line must be <b>K'</b>, the number of books you read (fully or partially) in this period. Follow this up with two integers for each book: <b>I</b> — the index of the book you chose (books are enumerated from <b>1</b> to <b>M</b> as they are given in input) and <b>W'</b> — the number of minutes you spent on it.</li>
<li>You are not allowed two print one book twice in one line. </li>
<li>You can't read the book if it is already finished. Sum of all <b>W'</b> in a line should not be bigger than the rest period duration.</li>
<li>If you do nothing in a rest period, just print <b>0</b>.</li>
<li>Any book of the first type should occur at most once in the output. If Chef reads such a book, it should be done completely in one segment.</li>
<li>Chef can't start book <b>B</b> until he finishes book <b>A</b> if there is a dependency <b>A</b>, <b>B</b> in the input.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N </b> ≤ <b>5*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b> M, K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>20</b> ≤ <b>R<sub>i</sub></b>≤ <b>200</b></li>
<li><b>10</b> ≤ <b>P<sub>i</sub></b>≤ <b>160</b></li>
<li><b>1</b> ≤ <b>T<sub>i</sub></b> ≤ <b>2</b></li>
<li><b>5</b> ≤ <b>W<sub>i</sub></b> ≤ <b>1600</b></li>
<li><b>1</b> ≤ <b>A, B</b> ≤ <b>M</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3 8 2
10 10 10
1 8 2
1 7 1
2 5 4
2 4 1
2 3 1
2 3 4
2 6 1
1 5 1
1 3
3 2

<b>Output:</b>
2 1 8 3 2
2 3 3 2 7
3 4 4 5 3 6 3
</pre>

<h3> Test generation plan</h3>
<p>
Sum of <b>R<sub>i</sub></b>'s will be <b>rand(5 * 10<sup>5</sup>, 10<sup>6</sup>)</b>.</br>
Sum of <b>P<sub>i</sub></b>'s will be <b>rand(3 * sum of R's, 8 * sum of R's)</b>.</br>
Let <b>R<sub>min</sub></b> and <b>R<sub>max</sub></b> denote the minimum and maximum values of <b>R<sub>i</sub></b>, respectively.</br>
<b>R<sub>min</sub></b> will be <b>rand(20, 100).</b> </br>
<b>R<sub>max</sub></b> will be <b>rand(R<sub>min</sub> + 50, 200)</b>. </br>
We will generate the number of pages of the books in an incremental fashion such that number of pages in a book will be <b>rand(R<sub>min</sub> / 2, R<sub>max</sub>* 4 / 5)</b>.
</p>

<p>
There are total 4 types of test files, whose description is given below. Please note that the total number of books of type 2 in each test case will be rand(10, 20), unless stated otherwise.</br>
<ul>
<li><b>Type 1</b> : We will generate a directed acyclic graph (DAG) encoding the dependencies of books. Each connected component of the DAG has rand(10, 50) vertices. The rating of a book depends on the number of pages in it and the minimum number of books that need to be finished before starting that particular book. The ratio of weight / number of pages will be in the range [1, 10] for books of the first type and [0.5, 1] for that of second type.</li>

<li><b>Type 2</b> : The DAG generator will be same as above. Rating of each book is computed as <b>rand(20,500)</b>.</li>

<li><b>Type 3</b> : Same as Type 1, but with no books of the second type.</li>

<li><b>Type 4</b> : Same as Type 1, except that the underlying DAG will be a collections of paths.</li>
</ul> 
</p>

We have 20 test files, 5 for each type. During the contest, your solution will run on all the test files. If your program gives WA/TLE/RE on any of the test files out of 20, it will be reported to you. On the other hand, if you get an AC, then the score reported to you is not the total score for all the files; instead, it is only the score for 4 test files, one of each type.