---
{"category_name":"medium","problem_code":"PAINTING","problem_name":"Crease Painting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"maksflow","date_added":"2-04-2012","tags":{"0":"cook21","1":"flying_ant","2":"medium"},"editorial_url":"http://discuss.codechef.com/problems/PAINTING","time":{"view_start_date":1335119118,"submit_start_date":1335119118,"visible_start_date":1335119400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">In cricket, the long white line before the batsman and the runner is called crease. We have a painting machine that can be programmed to paint white lines on the field. Imagine the cricket ground as an infinite grid of cells and the painting machine is initially located at the cell (0,0) which is already colored white and all other cells are in green color. Each instruction to the machine is of the form "direction distance", where direction is one of 'U' (up), 'D' (down), 'R' (right) or 'L' (left) and distance is a positive integer. On reading an instruction, the machine moves in the specified direction for specified distance and paints all the unpainted (green) cells with white color. Given a sequence of N instructions, find the number of cells that are painted white, for each of them.

<h3>Input</h3>
</p><p>First line contains N, number of instructions ( 1 ≤ N ≤ 1000 ). Each of the next N lines contains an instruction of the form DIR DIST, where DIR is one of ( U/D/R/L ) and DIS is a positive integer ( 1 ≤ DIS ≤ 10<sup>9</sup> )

<h3>Output</h3>
</p><p>For each instruction in the given order, output the number of cells that are painted white for each of them, in a separate line.

<h3>Example</h3>

<pre>
<b>Input:</b>
5
R 100
U 10
L 120
D 10
R 200


<b>Output:</b>
100
10
120
10
99
</pre>
<br />
<b>Explanation:</b><br />
R 100 : all 100 cells from (1,0) to (100,0) are painted white<br /><br />

U 10 : all 10 cells from (100,1) to (100,10) are painted white<br /><br />

L 120 : all 120 cells from (99,10) to (-20,10) are painted white<br /><br />

D 10 : all 10 cells from (-20,9) to (-20,0) are painted white<br /><br />

R 200 : The cells [ (0,0) to (100,0) ] are already painted white, so only the 19 cells [ (-19,0) to (-1,0) ] + the 80 cells [ (101,0) to (180,0) ] are painted white in this step.<br /></p>