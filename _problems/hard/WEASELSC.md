---
{"category_name":"hard","problem_code":"WEASELSC","problem_name":"Weasel finds Staircase","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":"jingbo_adm","date_added":"13-08-2017","tags":{"0":"bciobanu","1":"dynamic","2":"med","3":"persistent","4":"sept17"},"editorial_url":"https://discuss.codechef.com/problems/WEASELSC","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/WEASELSC.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/WEASELSC.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/WEASELSC.pdf">vietnamese</a> as well.</h3>

<p>Weasel loves histograms. Weasel feels that he is very much out of shape and asks for Chef’s advice. Chef convinced Weasel that the only way to get back in shape is to work out. Weasel decides to follow Chef’s advice and has formulated the greatest workout plan - to reflect his love for histograms - in which he will go down the staircase every day. However, Weasel is not in the best shape, so, for starters, he can only go down at most <b>K</b> steps.</p>

<p>Formally, a staircase is a set of adjacent rectangles with at most <b>K</b> changes of height. These rectangles should have either increasing or decreasing heights. The rectangles should start from the bottom (see images in the explanation section for clarification), and the height of rectangle at <b>i</b>-th position shouldn't be more than <b>histogram<sub>i</sub></b>. </p>

<p>For each of the <b>T</b> cases, you have to find the greatest area of a staircase that matches the above-mentioned restrictions.<p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases.</p>
<p>For each of the <b>T</b> cases, you will be given two integers <b>N</b>, denoting the number of elements of the histogram, and <b>K</b>, the maximum number of steps, on the first line.</p>
<p>For each of the <b>T</b> cases, you will be given <b>histogram</b> array on the second line. </p>

<h3>Output</h3>
<p>For each test case you should print an integer, the maximum area of a staircase that satisfies Weasel's conditions.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>50</b></li>
<li>The sum of <b>N</b> over all testcases does not exceed <b>10<sup>5</sup></b>.</li>
<li><b>0</b> ≤ <b>histogram<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (10 points): <b>K = 0</b>.</li>
<li><b>Subtask #2</b> (30 points): The sum of <b>N</b> over all testcases does not exceed <b>1,500</b>.</li>
<li><b>Subtask #3</b> (60 points): original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
5 2
1 2 3 4 5
5 3
9 8 7 6 4
5 1
8 7 5 7 8
4 10
0 1 1 0

<b>Output:</b>
13
33
29
2
</pre>

<h3>Explanation</h3>
<p>
The cells which form the staircase are colored with yellow. The discarded cells are colored with grey.
</p>
<p>
<h4>Case <b>1</b>:</h4>
<p>The computed area is <b>1</b> + <b>2</b> × <b>2</b> + <b>4</b> × <b>2</b> = <b>13</b>. <br> There are <b>2</b> changes of height: we start with a height of <b>1</b>, we change to <b>2</b> and then we change to <b>4</b>.</p>
<img height="150" width="500" src="https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_1.png">
<h4>Case <b>2</b>:</h4>
<p>The computed area is <b>9</b> + <b>7</b> × <b>2</b> + <b>6</b> + <b>4</b> = <b>33</b>.</p> 
<img height="150" width="500" src="https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_2.png">
<h4>Case <b>3</b>:</h4>
<p>The computed area is <b>7</b> × <b>2</b> + <b>5</b> × <b>3</b> = <b>29</b>.</p> 
<img height="150" width="500" src="https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_3_1.png">
<p>Here is another possible solution:</p>
<img height="150" width="500" src="https://codechef_shared.s3.amazonaws.com/download/upload/SEPT17/WEASELSC/example_3_2.png">
<h4>Case <b>4</b>:</h4>
<p>We take the second and the third cell. We have <b>0</b> changes in height. This is a viable solution because we can also have staircases with less than <b>K</b>
 changes.</p>
</p>