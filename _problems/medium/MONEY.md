---
{"languages_supported":{"0":"NA"},"title":"MONEY","category":"NA","old_version":true,"problem_code":"MONEY","tags":{"0":"NA"},"layout":"problem"}
---

<p>The Government of Byteland has decide to issue new currency notes with special protection features to commemorate a great mathematician. <br /><br /> It has decided to issue notes summing up to N such that all the sums from 1 to N should be possible to be made by selecting some of the notes. Also this has to be done in way such that if any note from 1 to N can be made in more than one way by combining other selected notes then that set of notes is not valid.<br /><br /> For example, with N = 7,<br /><br /> The valid sets are:<br /> {1,1,1,1,1,1,1}<br /> {1,1,1,4}<br /> {1,2,2,2}<br /> {1,2,4}<br /><br /> Invalid sets are:<br /> {1,1,1,2,2} beacuse the sum adds up to 7 but 2 can be made by {1,1} and {2}, 3 can be made by {1,1,1} and {1,2}, 4 can be made by {1,1,2} and {2,2} and similarly 5, 6 and 7 can also be made in multiple ways using the same set.<br /> {1,1,3,6} beacuse all from 1 to 7 can be uniquely made but the sum is not 7 (its 11).<br /><br /> Before implementing this idea of issuing these new set of notes, the Government wants to know how many possible valid sets are there for a given N. Your program should help the Government to find this out.<br /><br /></p>
<h3>Input</h3>
<p>First line will contain the number of test cases T (1&lt;=T&lt;=6666). <br /> Each test case will have one line containing an integer N (&lt;= 2^31-1).<br /><br /></p>
<h3>Output</h3>
<p>For each value of N output the total number of valid sets on a separate line.<br /><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
7
111212121
1000

<b>Output:</b>
4
75
13
</pre>    