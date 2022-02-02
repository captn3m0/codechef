---
{"category_name":"medium","problem_code":"TWINRO","problem_name":"Twin Robots","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"yogesh01","problem_tester":null,"date_added":"29-12-2014","tags":{"0":"yogesh01"},"time":{"view_start_date":1422636370,"submit_start_date":1422636370,"visible_start_date":1422635400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You have a board divided into N ×N squares and two robots, R<sub>2</sub>D<sub>2</sub> and C<sub>3</sub>P O. Each square on the board has a number written on it</p>
<p>R<sub>2</sub>D<sub>2</sub> starts at the top left corner square of the board and C<sub>3</sub>P O starts at the top right corner square of the board. Your aim is to move the robots so that R<sub>2</sub>D<sub>2</sub> reaches the bottom right corner square and C<sub>3</sub>P O reaches the bottom left corner square. You have a remote control with two buttons, blue and yellow, that control the robots as follows.</p>
<ul>
<li>Whenever you press the blue button, R<sub>2</sub>D<sub>2</sub> moves one square to the right and C<sub>3</sub>P O moves one square down.</li>
<li>Whenever you press the yellow button, R<sub>2</sub>D<sub>2</sub> moves one square down and C<sub>3</sub>P O moves one square left.</li>
</ul>
<p>The robots are not allowed to move oﬀ the board—if pushing a button would force either one of the robots to move oﬀ the board, the button push has no eﬀect and both robots stay where they are.</p>
<p>For each robot, you compute a score which is the sum of the numbers on the squares that it visits along the path that it follows from its starting position to its ﬁnal position. The combined score of the two robots is the sum of their individual scores. Your aim is to compute the maximum combined score that the two robots can achieve.</p>
<p>  For example, suppose you have a 4 × 4 board as follows.</p>
<p><img src="/download/extimages/3c1ec326273967d4ef5c1c67d934ad23.png" /></p>
<p>In this example, if R<sub>2</sub>D<sub>2</sub> follows the path marked by ∗ and C<sub>3</sub>PO follows the path marked by †, as shown below, their combined score is 56.</p>
<p><img src="/download/extimages/237fd6c087ea55dc939aa61dce2aa026.png" /></p>
<h3>Input</h3>
<p>The ﬁrst line of input is a single integer N, the size of the square board. This is followed by N lines, each containing N space separated integers. For 1 ≤ i ≤ N, the integers on line i+1 of the input describe row i of the board.</p>
<h3>Output</h3>
<p>A single integer, the maximum combined score that the two robots can achieve. .</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2500</b></li>
<li><b>-9999</b>≤ <b>score on each square</b> ≤ <b>9999</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
6 0 3 -1
7 4 2 4
-3 3 -2 8
13 10 -1 -4

<b>Output:</b>
56

</pre><p> </p>
