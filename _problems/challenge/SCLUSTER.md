---
{"category_name":"challenge","problem_code":"SCLUSTER","problem_name":"Social Cluster","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"nssprogrammer","problem_tester":"laycurse","date_added":"17-03-2015","tags":{"0":"annealing","1":"aug15","2":"challenge","3":"facility","4":"heuristic","5":"nssprogrammer","6":"steinertree","7":"stimulated"},"editorial_url":"http://discuss.codechef.com/problems/SCLUSTER","time":{"view_start_date":1439803800,"submit_start_date":1439803800,"visible_start_date":1439803800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/mandarin/SCLUSTER.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG15/russian/SCLUSTER.pdf">Russian</a>.</h3>


<p>This problem deals with the effective formation of a cluster among <b>K</b> individuals living in a society. A society can be represented  as a <b>N × N</b> grid. Individuals are located at certain points on the grid. Each individual's social interaction is measured by a positive integer, called <b>interaction power</b> denoted by <b>I<sub>i</sub></b>. The <b>dissimilarity</B> between two individuals is defined as the absolute difference between their interaction powers. Less the absolute difference between interaction powers of two individuals, more the probability that they will interact with each other.</p>
<p>Now your task is to form a single cluster of individuals by displacing some individuals from their original positions. Formally, a cluster means a connected component. An individual at point <b>(x<sub>i</sub>, y<sub>i</sub>)</b> is said to be <b>adjacent</b> to another individual at point <b>(x<sub>j</sub>, y<sub>j</sub>)</b> if and only if <b>|x<sub>i</sub> − x<sub>j</sub>| ≤ 1</b> and <b>|y<sub>i</sub> − y<sub>j</sub>| ≤ 1</b>.</p>
<p><b>What needs to be optimized ?</b></p>
<p>The cost of clustering is defined as <b>Score = 1000×A + 10×B</b> , where <b>A</b> and <b>B</b> are two variables. <b>The task is to minimize this cost.</b></p>
<p>We define <b>A</b> first. Suppose <b>P</b> be the set of individuals on the grid and <b>|P| = K</b>. In order to create the cluster, we may need to displace some individuals from their original positions on the grid. Let the individual <b>p<sub>i</sub></b> be displaced by a Manhattan distance <b>d<sub>i</sub></b> in order to become a part of the cluster.<br />Now <b>d<sub>i</sub> = |x<sub>i(final)</sub> − x<sub>i(initial)</sub>| + |y<sub>i(final)</sub> − y<sub>i(initial)</sub>|</b>.<br />Here <b>(x<sub>i(initial)</sub>, y<sub>i(initial)</sub>)</b> is the initial position of individual <b>p<sub>i</sub></b> and <b>(x<sub>i(final)</sub>, y<sub>i(final)</sub>)</b> is the position of the same individual after becoming a part of the cluster.<br />Now <b>A = Σ (d<sub>i</sub> / I<sub>i</sub>) </b> where <b>i = 1 to K</b>.<br />Here <b>I</b><sub>i</sub> = Interaction power of individual <b>p<sub>i</sub></b>.</p><p>The variable <b>B</b> is defined after the cluster is formed.<br><b>B = Σ ( s<sub>i</sub> / n<sub>i</sub> )</b> , where <b> i = 1 to K</b>.<br /><b>s<sub>i</sub> = Σ (|I<sub>j</sub> − I<sub>i</sub>| )</b>, where <b>{ p<sub>j</sub> ∈ P | p<sub>j</sub> is adjacent to p<sub>i</sub> }</b>.<br /><b>n<sub>i</sub></b> = Number of individuals adjacent to <b>p<sub>i</sub></b>.</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space separated integers <b>N</b> and <b>K</b>, denoting the grid size and the number of individuals, respectively. Then <b>N</b> lines follow. The <b>i<sup>th</sup></b> of these lines contains <b>N</b> space separated integers, denoting the information regarding the <b>i<sup>th</sup></b> row. The <b>j<sup>th</sup></b> value of <b>i<sup>th</sup></b> row contains the index value of an individual at <b>(i, j)</b> cell. The index value, of course, ranges from <b>1</b> to <b>K</b>. Empty cells have zero value.</p>
<p>Then <b>K</b> lines follow. The <b>i<sup>th</sup></b> of these lines contains the value of <b>I<sub>i</sub</p></b>, the interaction power of <b>i<sup>th</sup></b> individual.</p>

<h3>Output</h3>
<p> For each test case, print <b>N</b> lines, each line containing <b>N</b> space separated integers. It represents the <b>N × N</b> grid containing the cluster.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>60</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>60</b></li>
<li><b>2</b> ≤ <b>K</b> ≤ <b>2000</b></li>
<li><b>1</b> ≤ <b>I<sub>i</sub></b> ≤ <b>25</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5 5
0 0 0 1 0
0 0 0 0 0
2 0 5 0 4
0 0 0 0 0
0 3 0 0 0
2
3
2
3
3

<b>Output:</b>
0 0 0 0 0
0 0 1 0 0
0 2 5 4 0
0 0 3 0 0
0 0 0 0 0
</pre>

<h3>Explanation</h3>
<p><pre>Calculation of value <b>A</b> :
<b>d<sub>1</sub></b> = 2        <b>I<sub>1</sub></b> = 2
<b>d<sub>2</sub></b> = 1        <b>I<sub>2</sub></b> = 3
<b>d<sub>3</sub></b> = 2        <b>I<sub>3</sub></b> = 2
<b>d<sub>4</sub></b> = 1        <b>I<sub>4</sub></b> = 3
<b>d<sub>5</sub></b> = 0        <b>I<sub>5</sub></b> = 3
<b>A</b>  =   <b>d<sub>1</sub></b>/ <b>I<sub>1</sub></b> + <b>d<sub>2</sub></b>/<b>I<sub>2</sub></b> + <b>d<sub>3</sub></b>/<b>I<sub>3</sub></b> + <b>d<sub>4</sub></b>/<b>I<sub>4</sub></b> + <b>d<sub>5</sub></b>/<b>I<sub>5</sub></b>
    = <b>1</b> + <b>0.333...</b> + <b>1</b> + <b>0.333...</b> + <b>0</b>
    = <b>2.666...</b> <br>   
Calculation of value <b>B</b> :
(Number of individuals adjacent to <b>1</b>) = <b>n<sub>1</sub></b> = <b>3</b>  ( 2 , 5 , 4 )
<b>s<sub>1</sub></b> = <b>|I<sub>1</sub> − I<sub>2</sub>|</b> + <b>|I<sub>1</sub> − I<sub>5</sub>|</b> + <b>|I<sub>1</sub> − I<sub>4</sub>|</b>
    = <b>1</b> + <b>1</b> + <b>1</b>
    = <b>3</b>
(Number of individuals adjacent to <b>2</b>) = <b>n<sub>2</sub></b> = <b>3</b>  ( 1 , 5 , 3 )
<b>s<sub>2</sub></b> = <b>|I<sub>2</sub> − I<sub>1</sub>|</b> + <b>|I<sub>2</sub> − I<sub>5</sub>|</b> + <b>|I<sub>2</sub> − I<sub>3</sub>|</b>
    = <b>1</b> + <b>0</b> + <b>1</b>
    = <b>2</b>
In a similar fashion ,
<b>n<sub>3</sub></b> = <b>3</b>, <b>n<sub>4</sub></b> = <b>3</b>, <b>n<sub>5</sub></b> = <b>4</b>,
<b>s<sub>3</sub></b> = <b>3</b>, <b>s<sub>4</sub></b> = <b>2</b>, <b>s<sub>5</sub></b> = <b>2</b>,
<b>B</b>  =   <b>s<sub>1</sub></b>/<b>n<sub>1</sub></b> + <b>s<sub>2</sub></b>/<b>n<sub>2</sub></b> + <b>s<sub>3</sub></b>/<b>n<sub>3</sub></b> + <b>s<sub>4</sub></b>/<b>n<sub>4</sub></b> + <b>s<sub>5</sub></b>/<b>n<sub>5</sub></b>
     =  <b>1</b> + <b>0.666...</b> + <b>1</b> + <b>0.666...</b> + <b>0.5</b>
     =  <b>3.833...</b>

Now <b>Cost</b> = <b>1000×A</b> + <b>10×B</b>
                 = <b>2666.66...</b> + <b>38.33...</b>
                 = <b>2705</b>
								
A different configuration of the cluster may result in a different cost. The task is to minimize this clustering cost.
</pre>

<h3>Test generation method and scoring</h3>
<p>All test file has <b>T = 60</b>. Then each test case is generated as follows.</p>
<p>An integer <b>x</b> is chosen from <b>[2, 60]</b> uniformly and randomly at first. Then <b>N</b> is chosen from <b>[x, 60]</b> uniformly and randomly. Next, an integer <b>y</b> is chosen from <b>[2, min(2000, N×N)]</b>, and <b>K</b> is chosen from <b>[2, y]</b> uniformly and randomly. Starting at empty grid, choose an empty cell uniformly and randomly, then put one individual put the cell one by one. Lastly, <b>I<sub>i</sub></b> are chosen from <b>[1, 25]</b> uniformly and randomly and independently for <b>i=1,2,...,K</b>.</p>
<p>There are <b>20</b> test files in the judge. The score for each test case is calculated as described in the statements. Then the score for each test file is defined by the sum of the score of test cases in the test file. Finally, the final score is defined by the average of the score for each test file. During the contest, only the first <b>12</b> test cases in each test case affect the score, and the scores of the rest <b>48</b> test cases are treated as <b>0</b>.</p>


<h3>Note</h3>
You are allowed maximum of 200 submissions in this problem. Also, no memory and time limit information will be provided for the test cases which are meant to be judged after the contest (i.e. 80% of the test cases). Though, you will be told AC/WA for that too.