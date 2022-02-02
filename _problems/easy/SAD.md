---
{"category_name":"easy","problem_code":"SAD","problem_name":"Gift Rift","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shettynamit","problem_tester":"laycurse","date_added":"15-05-2012","tags":{"0":"cakewalk","1":"july12","2":"search","3":"shettynamit"},"editorial_url":"http://discuss.codechef.com/problems/SAD","time":{"view_start_date":1341999849,"submit_start_date":1341999849,"visible_start_date":1341999849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Our Chef is very happy that his son was selected for training in one of the finest culinary schools of the world.
So he and his wife decide to buy a gift for the kid as a token of appreciation.
Unfortunately, the Chef hasn't been doing good business lately, and is in no mood on splurging money.
On the other hand, the boy's mother wants to buy something big and expensive.
To settle the matter like reasonable parents, they play a game.
</p>

<p>
They spend the whole day thinking of various gifts and write them down in a huge matrix.
Each cell of the matrix contains the gift's cost.
Then they decide that the mother will choose a row number <b>r</b> while the father will choose a column number <b>c</b>,
the item from the corresponding cell will be gifted to the kid in a couple of days. 
</p>

<p>
The boy observes all of this secretly.
He is smart enough to understand that his parents will ultimately choose a gift whose cost is <b>smallest</b> in its <b>row</b>,
but <b>largest</b> in its <b>column</b>.
If no such gift exists, then our little chef has no option but to keep guessing.
As the matrix is huge, he turns to you for help.
</p>

<p>
He knows that sometimes the gift is not determined uniquely even if a gift exists whose cost is smallest in its row,
but largest in its column.
However, since the boy is so smart, he realizes that the gift's <b>cost</b> is determined <b>uniquely</b>.
Your task is to tell him the gift's <b>cost</b> which is smallest in its row,
but largest in its column, or to tell him no such gift exists.
</p>

<h3>Input</h3>
<p>First line contains two integers <b>R</b> and <b>C</b>, the number of rows and columns in the matrix respectively. Then follow <b>R</b> lines, each containing <b>C</b> space separated integers - the costs of different gifts.
</p>

<h3>Output</h3>
<p> Print a single integer - a value in the matrix that is smallest in its row but highest in its column. If no such value exists, then print "GUESS" (without quotes of course) </p>
<h3>Constraints</h3>
<p> 1 &lt;= <b>R</b>, <b>C</b> &lt;= 100 </p>
<p> All gift costs are positive and less than 100000000 (10^8) </p>
<h3>Example 1</h3>

<pre>
<b>Input:</b>
2 3
9 8 8
2 6 11

<b>Output:</b>
8
</pre>

<h3>Example 2</h3>

<pre>
<b>Input:</b>
3 3
9 8 11
2 6 34
5 9 11

<b>Output:</b>
GUESS
</pre>

<h3>Example 3</h3>

<pre>
<b>Input:</b>
2 2
10 10
10 10

<b>Output:</b>
10
</pre>

<h3>Explanation of Sample Cases</h3>
<p><b>Example 1</b>: The first row contains 9, 8, 8. Observe that both 8 are the minimum. Considering the first 8, look at the corresponding column (containing 8 and 6). Here, 8 is the largest element in that column. So it will be chosen.</p>

<p><b>Example 2</b>: There is no value in the matrix that is smallest in its row but largest in its column.</p>

<p><b>Example 3</b>: The required gift in matrix is not determined uniquely, but the required cost is determined uniquely.</p>
