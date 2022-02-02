---
{"category_name":"challenge","problem_code":"FLOOD","problem_name":"Flood","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":1.48,"source_sizelimit":50000,"problem_author":"admin","problem_tester":"friggstad","date_added":"19-03-2010","tags":{"0":"admin","1":"april10","2":"challenge"},"editorial_url":"http://discuss.codechef.com/problems/FLOOD","time":{"view_start_date":1271170073,"submit_start_date":1271170073,"visible_start_date":1271170073,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Each year in the rainy season, the LCD province in Byteland is flooded with water. The province has the form of a rectangular land divded into unit cells 

of M lines and N columns. Some cells are flooded and some cells are not. Each flooded cell has a water depth level which is a positive integer. 

</p><p>Because of flood, the land is divided into several islands, each island consists of the cells that can move around one another but cannot move to cells in 

different islands. The people can move between two non flooded cells if these cells have at least one common point.

</p><p>To improve the transportation quality during the flooding season, the LCD's goverment decides to raise some flooded cells to become non flooded cells 

so that after the process, the people are able to travel between any two non flooded cells.

</p><p>To make a flooded cell whose water depth level is D become non flooded, the workers need to put in D units of clay. 

</p><p>The government wants to achieve the goal using the fewest units of clay possible.

<h3>Input</h3>

</p><p>The first line contains t, the number of test cases (about 20), each test case has the following form. 

</p><p>The first line contains two number M and N (1 &lt;= M, N &lt;= 200).

</p><p>Each line in the next M lines contain N numbers describing the status of each cell in the land. If a cell is not flooded, the corresponding number is -1 while 

if it is flooded the corresponding number is the cell's water depth level.
</p><p>Each test case's input is separated by a blank line.

<h3>Output</h3>

</p><p>For each test case, output the result in the following format.
</p><p>The first line contains T, the number of units of clay used.
</p><p>The second line contains a number S which is the number of flooded cells needed to raise.
</p><p>Each line in the next S lines contains two numbers representing the row and column index (1-based) of a raised cell.
</p><p>Print a blank line after each test case's output.

<h3>Scoring</h3>
</p><p>For each test case, your program's score is equal to T/H in which H is the number of units of clays to raise all the flooded cell.

<h3>Example</h3>
<pre>
<b>Input</b>
1

3 3
-1 10 -1
10  2 10
-1 10 -1

<b>Output</b>
2
1
2 2
</pre>
</p><p>This output will give score to be 2 / (10 + 10 + 2 + 10 + 10)  =  1/ 21</p>