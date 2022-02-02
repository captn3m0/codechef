---
{"languages_supported":{"0":"NA"},"title":"VOTERS","category":"NA","old_version":true,"problem_code":"VOTERS","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p> As you might remember, the collector of Siruseri had ordered
a complete revision of the Voters List. He knew that constructing
the list of voters is a difficult task, prone to errors. Some
voters may have been away on vacation, others may have moved
during the enrollment and so on. </p>

<p> To be as accurate as possible, he entrusted the task to three different 
officials. Each of them was to independently record the list of voters and 
send it to the collector. In Siruseri, every one has a ID number and
the list would only list the ID numbers of the voters and not their names.
The officials were expected to arrange the ID numbers in ascending order
in their lists. </p>

<p> On receiving the lists, the Collector realised that there were
discrepancies - the three lists were not identical.  He decided
to go with the majority. That is, he decided to construct the
final list including only those ID numbers that appeared in at
least 2 out of the 3 lists.  For example if the three lists
were</p>

<pre>
23  30  42  57  90
21  23  35  57  90  92
21  23  30  57  90 
</pre>

<p>then the final list compiled by the collector would be:</p>

<pre>
21  23  30  57  90
</pre>

<p> The ID numbers 35, 42 and 92 which appeared in only one list
each do not figure in the final list.</p>

<p> Your task is to help the collector by writing a program that
produces the final list from the three given lists.</p>

<p>Input format</p>

<p>The first line of the input contains 3 integers
<em>N</em><sub>1</sub>, <em>N</em><sub>2</sub> and
<em>N</em><sub>3</sub>.  <em>N</em><sub>1</sub> is the number of
voters in the first list, <em>N</em><sub>2</sub> is the number of
voters in the second list and <em>N</em><sub>3</sub> is the number of
voters in the third list.  The next <em>N</em><sub>1</sub> lines
(lines 2,...,<em>N</em><sub>1</sub>+1) contain one positive integer
each and describe the first list in ascending order.  The following

<em>N</em><sub>2</sub> lines (lines
<em>N</em><sub>1</sub>+2,...,<em>N</em><sub>1</sub>+<em>N</em><sub>2</sub>+1)
describe the second list in ascending order and the final
<em>N</em><sub>3</sub> lines (lines

<em>N</em><sub>1</sub>+<em>N</em><sub>2</sub>+2,...,<em>N</em><sub>1</sub>+<em>N</em><sub>2</sub>+<em>N</em><sub>3</sub>+1)
describe the third list in ascending order.</p>

<p>Output format</p>

<p>The first line of the output should contain a single integer
<em>M</em> indicating the number voters in the final list. The next
<em>M</em> lines (lines 2,...,<em>M</em>+1) should contain one
positive integer each, describing the list of voters in the final
list, in ascending order.</p>

<p>Test data</p>

<p>You may assume that 1    
<em>N</em><sub>1</sub>,<em>N</em><sub>2</sub>,<em>N</em><sub>3</sub>
    50000.
</p>

<p>Example</p>
<p>Sample input:</p>

<pre>
5 6 5
23
30
42
57
90
21 
23 
35 
57 
90 
92 
21 
23 
30 
57 
90 
</pre>

<p>Sample output:</p>

<pre>
5
21 
23 
30 
57 
90
</pre>    