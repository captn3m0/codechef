---
{"category_name":"easy","problem_code":"RECTLOVE","problem_name":"Rectangles of Love","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"minimario","problem_tester":null,"date_added":"30-08-2015","tags":{"0":"expectation","1":"feb16","2":"minimario"},"editorial_url":"http://discuss.codechef.com/problems/RECTLOVE","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/RECTLOVE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/RECTLOVE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/RECTLOVE.pdf">Vietnamese</a> as well.</h3>


<p>Today is the planned day tor Thik and Ayvak's wedding. Kark is infatuated with Ayvak. He offers to play a game with Thik. Whosoever wins, will get to marry Ayvak. Ayvak, who values games of chance over all the other things in life, agrees to this.
</p>
<p>
Kark sets up an <b>N</b> by <b>M</b> grid (<b>N</b> rows, <b>M</b> columns), labelled from left to right and top to bottom consecutively with numbers from 1 to M*N, with 1 at the top left corner and M*N at the bottom right corner. For example, a labelled 3 by 6 grid looks as follows:</p>

<p>
<img src="http://i.imgur.com/wvzXBk0.png">
</p>

<p>Kark has already painted <b>K</b> unit squares of the grid with a heart each. Next, Thik randomly picks a rectangle with sides on the grid lines, and having a positive area, with each valid rectangle having an equal probability of being chosen. Three distinct possibilities for Thik's rectangle in the 3 by 6 grid are shown below: </p>

<p>
<img src="http://i.imgur.com/iUDIeMG.png">
</p>

The nine different rectangles in a 2 by 2 grid are shown below:

<p>
<img src="http://i.imgur.com/c2aszAv.png">
</p>

If Thik's rectangle contains at least half of the hearts, Thik gets to marry Ayvak. Otherwise, Kark will marry Ayvak. Kark wants to know whether or not he has an advantage here, so he wants to know the expected value of the number of hearts a randomly chosen rectangle will cover. I'm sure that you have a good heart, so please, cover this job for him. 

<h3>Input</h3>
<p>The first line of input contains one integer <b>T</b>, the number of test cases.</p>

<p>For each test case, the first line contains 3 space-separated integers <b>N, M, K</b>, as described in the problem statement. The next line contains <b>K</b> space-separated integers, each a single number from <b>1</b> to <b>M*N</b>, representing a square that is painted with a heart. It is guaranteed that all <b>K</b> integers are distinct.</p>

<h3>Output</h3>
<p>Output <b>T</b> lines, each containing a single real number, containing the expected number of hearts that a randomly chosen rectangle will contain. The answer will be considered correct if its relative or absolute error does not exceed 10<sup>-6</sup>.
</p>

<h3>Constraints</h3>
<li><b>1 ≤ T ≤ 5 </b> </li>
<li><b>1 ≤ N, M ≤ 10<sup>7</sup> </b> </li>
<li><b>1 ≤ K ≤ 10<sup>5</sup>  </b></li>
<li><b>Each of the K integers representing a heart are between 1 and N*M, inclusive. All K integers are distinct. </b></li>
</ul>

<h3>Subtasks</h3>
<b>Subtask 1</b> (15 points) : 
<ul>
<li>1 ≤ <b>N, M</b> ≤ 10</li>
<li>1 ≤ <b>K</b> ≤ <b>N * M</b> </li>
</ul> </br>
<b>Subtask 2</b> (85 points) : no additional constraints 


<h3>Example</h3>
<pre><b>Input:</b>
1
2 2 2
1 2

<b>Output:</b>
0.8888888888888888
</pre>

<h3>Explanation</h3>
<p>There are a total of 9 possible rectangles Thik could draw, shown in the figure above, and grid squares 1 and 2 are painted with a heart. The top row of possible selections (shown in the figure) contain 1, 0, 1, 2, and 2 hearts (from left to right), and the bottom row of possible selections (in the figure) contain 1, 0, 1, and 0 hearts. Therefore, 3/9 of the time 0 hearts are contained in the rectangle, 4/9 of the times 1 heart is contained in the rectangle, and 2/9 of the time 2 hearts are contained in the rectangle. The expected value is then 0 * 3/9 + 1 * 4/9 + 2 * 2/9 = 8/9.</p>
