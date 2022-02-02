---
{"languages_supported":{"0":"NA"},"title":"STADIUM","category":"NA","old_version":true,"problem_code":"STADIUM","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>
The bustling town of Siruseri has just one sports stadium. There
are a number of schools, colleges, sports associations, etc. that
use this stadium as the venue for their sports events. </p>

<p> Anyone interested in using the stadium has to apply to the Manager
of the stadium indicating both the starting date (a positive integer
S) and the length of the sporting event in days (a positive integer D)
they plan to organise.  Since these requests could overlap it may not
be possible to satisfy everyone.  </p>

<p>
It is the job of the Manager to decide who gets to use the
stadium and who does not. The Manager, being a genial man, would like
to keep as many organisations happy as possible and hence would
like to allocate the stadium so that maximum number of events are held.
</p>

<p>
Suppose, for example, the Manager receives the following 4 requests: 
</p>
<table>
<tr>
<td>Event No.</td>
<td>Start Date</td>
<td>Length</td>
</tr>
<tr><td>1</td><td>2</td><td>5</td></tr>
<tr><td>2</td><td>9</td><td>7</td></tr>
<tr><td>3</td><td>15</td><td>6</td></tr>
<tr><td>4</td><td>9</td><td>3</td></tr>
</table>
<p>
He would allot the stadium to events 1, 4 and 3. Event 1 begins on day 2
and ends on day 6, event 4 begins on day 9 and ends on day 11 and event
3 begins on day 15 and ends on day 20. You can verify that it is not possible
to schedule all the 4 events (since events 2 and 3 overlap  and only one of 
them can get to use the stadium).
</p>

<p>
Your task is to help the manager find the best possible allotment (i.e.,
the maximum number of events that can use the stadium).
</p>

<p>Input format</p>


<p>
The first line of the input will contain a single integer N (N     100000)
indicating the number of events for which the Manager has received a request.
Lines 2,3,...,N+1  describe the requirements of the N events.  
Line i+1 contains two integer Si and Di indicating the starting date 
and the duration of event i. You may assume that 1     Si     1000000 and 
1     Di     1000.

</p>

<p>Output format</p>

<p>
Your output must consist of a single line containing a single integer M,
indicating the maximum possible number of events that can use the stadium.
</p>
<p>Example:</p>

<p>Sample input:</p>

<pre>
4
2 5
9 7
15 6
9 3
</pre>

<p>Sample output:</p>

<pre>
3

</pre>    