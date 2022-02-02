---
{"category_name":"easy","problem_code":"THEATRE","problem_name":"The Theatre Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n12\r\nA 3\r\nB 12\r\nC 6\r\nA 9\r\nB 12\r\nC 12\r\nD 3\r\nB 9\r\nD 3\r\nB 12\r\nB 9\r\nC 6\r\n7\r\nA 9\r\nA 9\r\nB 6\r\nC 3\r\nD 12\r\nA 9\r\nB 6\r\n2\r\nA 9\r\nB 6\r\n1\r\nD 12\r\n0","output":"575\r\n525\r\n-25 \r\n-200 \r\n-400\r\n475","explanation":"**Example case 1:** The following table shows the number of people that want to watch the movies at the given showtimes:\r\n\r\n\u003Ctable\u003E\r\n\u003Ctr\u003E\r\n\u003Cth\u003E     \u003C/th\u003E\r\n\u003Cth\u003E 12 \u003C/th\u003E\r\n\u003Cth\u003E 3 \u003C/th\u003E\r\n\u003Cth\u003E 6 \u003C/th\u003E\r\n\u003Cth\u003E 9 \u003C/th\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  A  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 1 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E1\u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  B  \u003C/td\u003E\r\n\u003Ctd\u003E 3 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 2 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  C  \u003C/td\u003E\r\n\u003Ctd\u003E 1 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 2 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  D  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 2 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003C/table\u003E\r\n\r\nThe maximum number of requests was sent for movie B at 12 PM. Therefore, we play this movie at this time and the tickets cost Rs 100. Next, we play movie D at 3 PM with ticket price Rs 75 and movie C at 6 PM with ticket price Rs 50. Finally, we have a slot for 9 PM and the only movie we can play at that time now is movie A, with ticket price Rs 25. The total profit is $3 \\cdot 100 + 2 \\cdot 75 + 2 \\cdot 50 + 1 \\cdot 25 = 300 + 150 + 100 + 25 = 575$. Since each movie was watched by at least one person, there is no additional loss.\r\n\r\n**Example case 2:** Just like above, we show the requests in a table:\r\n\r\n\u003Ctable\u003E\r\n\u003Ctr\u003E\r\n\u003Cth\u003E     \u003C/th\u003E\r\n\u003Cth\u003E 12 \u003C/th\u003E\r\n\u003Cth\u003E 3 \u003C/th\u003E\r\n\u003Cth\u003E 6 \u003C/th\u003E\r\n\u003Cth\u003E 9 \u003C/th\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  A  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E3\u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  B  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 2 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  C  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 1 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  D  \u003C/td\u003E\r\n\u003Ctd\u003E 1 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003C/table\u003E\r\n\r\nThe optimal solution is to play movie A at 9 PM, movie B at 6 PM, movie C at 3 PM and movie D at 12 PM, with decreasing ticket prices in this order. The profit is $3 \\cdot 100 + 2 \\cdot 75 + 1 \\cdot 50 + 1 \\cdot 25 = 300+150+50+25 = 525$.\r\n\r\n**Example case 3:** Again, we show the requests in a table:\r\n\r\n\u003Ctable\u003E\r\n\u003Ctr\u003E\r\n\u003Cth\u003E     \u003C/th\u003E\r\n\u003Cth\u003E 12 \u003C/th\u003E\r\n\u003Cth\u003E 3 \u003C/th\u003E\r\n\u003Cth\u003E 6 \u003C/th\u003E\r\n\u003Cth\u003E 9 \u003C/th\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  A  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E1\u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  B  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 1 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  C  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003Ctr\u003E\r\n\u003Ctd\u003E  D  \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003Ctd\u003E 0 \u003C/td\u003E\r\n\u003C/tr\u003E\r\n\u003C/table\u003E\r\n\r\nThe optimal solution is to play movie A at 9 PM with ticket price Rs 100, movie B at 6 PM with ticket price Rs 75 and the remaining two movies in any order at 12 PM and 3 PM ? either way, there will be nobody watching them. We earn $1 \\cdot 100 + 1 \\cdot 75 = 175$, but we have to deduct Rs 200, so the resulting profit is $175 - 200 = -25$.\r\n\r\n**Example case 4:** The optimal solution is to play movie D at 12 PM; the other three movies go unattended. We have to deduct Rs 300, so the profit is $1 \\cdot 100 - 300 = -200$.\r\n\r\n**Example case 5:** Since there are no requests for any movie at any time, all movies go unattended and Alex just suffers a loss of Rs 400.\r\n\r\nThe total profit for all 5 days is $575+525-25-200-400 = 475$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kushalgoel","problem_tester":null,"date_added":"20-01-2020","tags":{"0":"brute","1":"feb20","2":"greedy","3":"kushalgoel","4":"simple","5":"tmwilliamlin"},"problem_difficulty_level":"Simple","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/THEATRE","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=THEATRE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/THEATRE.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/THEATRE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/THEATRE.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/THEATRE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/THEATRE.pdf) as well.

Chef's friend Alex runs a movie theatre. Due to the increasing number of platforms for watching movies online, his business is not running well. As a friend, Alex asked Chef to help him maximise his profits. Since Chef is a busy person, he needs your help to support his friend Alex.  

Alex's theatre has four *showtimes*: 12 PM, 3 PM, 6 PM and 9 PM. He has four movies which he would like to play ― let's call them A, B, C and D. Each of these movies must be played exactly once and all four must be played at different showtimes. For each showtime, the price of a ticket must be one of the following: Rs 25, Rs 50, Rs 75 or Rs 100. The prices of tickets for different showtimes must also be different.

Through his app, Alex receives various requests from his customers. Each request has the form "I want to watch this movie at this showtime". Let's assume that the number of people who come to watch a movie at a given showtime is the same as the number of requests for that movie at that showtime.

It is not necessary to accommodate everyone's requests ― Alex just wants to earn the maximum amount of money. There is no restriction on the capacity of the theatre. However, for each movie that is not watched by anyone, Alex would suffer a loss of Rs 100 (deducted from the profit).

You are given $N$ requests Alex received during one day. Find the maximum amount of money he can earn on that day by choosing when to play which movies and with which prices. 

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. Each of these lines contains a character $m$, followed by a space and an integer $t$, describing a request to see the movie $m$ at the showtime $t$.

### Output
For each test case, print a single line containing one integer ― the maximum profit Alex can earn (possibly negative).

Finally, print a line containing one integer ― the total profit over all test cases, i.e. over $T$ days.

### Constraints 
- $1 \le T \le 150$
- $0 \le N \le 100$
- $m$ is 'A', 'B', 'C' or 'D'
- $t$ is $12$, $3$, $6$ or $9$

### Subtasks
**Subtask #1 (30 points):** it is possible to fulfill all requests

**Subtask #2 (70 points):** original constraints

### Example Input
```
5
12
A 3
B 12
C 6
A 9
B 12
C 12
D 3
B 9
D 3
B 12
B 9
C 6
7
A 9
A 9
B 6
C 3
D 12
A 9
B 6
2
A 9
B 6
1
D 12
0 
```

### Example Output
```
575
525
-25 
-200 
-400
475
```
	
### Explanation
**Example case 1:** The following table shows the number of people that want to watch the movies at the given showtimes:

<table>
<tr>
<th>     </th>
<th> 12 </th>
<th> 3 </th>
<th> 6 </th>
<th> 9 </th>
</tr>
<tr>
<td>  A  </td>
<td> 0 </td>
<td> 1 </td>
<td> 0 </td>
<td>1</td>
</tr>
<tr>
<td>  B  </td>
<td> 3 </td>
<td> 0 </td>
<td> 0 </td>
<td> 2 </td>
</tr>
<tr>
<td>  C  </td>
<td> 1 </td>
<td> 0 </td>
<td> 2 </td>
<td> 0 </td>
</tr>
<tr>
<td>  D  </td>
<td> 0 </td>
<td> 2 </td>
<td> 0 </td>
<td> 0 </td>
</tr>
</table>

The maximum number of requests was sent for movie B at 12 PM. Therefore, we play this movie at this time and the tickets cost Rs 100. Next, we play movie D at 3 PM with ticket price Rs 75 and movie C at 6 PM with ticket price Rs 50. Finally, we have a slot for 9 PM and the only movie we can play at that time now is movie A, with ticket price Rs 25. The total profit is $3 \cdot 100 + 2 \cdot 75 + 2 \cdot 50 + 1 \cdot 25 = 300 + 150 + 100 + 25 = 575$. Since each movie was watched by at least one person, there is no additional loss.

**Example case 2:** Just like above, we show the requests in a table:

<table>
<tr>
<th>     </th>
<th> 12 </th>
<th> 3 </th>
<th> 6 </th>
<th> 9 </th>
</tr>
<tr>
<td>  A  </td>
<td> 0 </td>
<td> 0 </td>
<td> 0 </td>
<td>3</td>
</tr>
<tr>
<td>  B  </td>
<td> 0 </td>
<td> 0 </td>
<td> 2 </td>
<td> 0 </td>
</tr>
<tr>
<td>  C  </td>
<td> 0 </td>
<td> 1 </td>
<td> 0 </td>
<td> 0 </td>
</tr>
<tr>
<td>  D  </td>
<td> 1 </td>
<td> 0 </td>
<td> 0 </td>
<td> 0 </td>
</tr>
</table>

The optimal solution is to play movie A at 9 PM, movie B at 6 PM, movie C at 3 PM and movie D at 12 PM, with decreasing ticket prices in this order. The profit is $3 \cdot 100 + 2 \cdot 75 + 1 \cdot 50 + 1 \cdot 25 = 300+150+50+25 = 525$.

**Example case 3:** Again, we show the requests in a table:

<table>
<tr>
<th>     </th>
<th> 12 </th>
<th> 3 </th>
<th> 6 </th>
<th> 9 </th>
</tr>
<tr>
<td>  A  </td>
<td> 0 </td>
<td> 0 </td>
<td> 0 </td>
<td>1</td>
</tr>
<tr>
<td>  B  </td>
<td> 0 </td>
<td> 0 </td>
<td> 1 </td>
<td> 0 </td>
</tr>
<tr>
<td>  C  </td>
<td> 0 </td>
<td> 0 </td>
<td> 0 </td>
<td> 0 </td>
</tr>
<tr>
<td>  D  </td>
<td> 0 </td>
<td> 0 </td>
<td> 0 </td>
<td> 0 </td>
</tr>
</table>

The optimal solution is to play movie A at 9 PM with ticket price Rs 100, movie B at 6 PM with ticket price Rs 75 and the remaining two movies in any order at 12 PM and 3 PM ― either way, there will be nobody watching them. We earn $1 \cdot 100 + 1 \cdot 75 = 175$, but we have to deduct Rs 200, so the resulting profit is $175 - 200 = -25$.

**Example case 4:** The optimal solution is to play movie D at 12 PM; the other three movies go unattended. We have to deduct Rs 300, so the profit is $1 \cdot 100 - 300 = -200$.

**Example case 5:** Since there are no requests for any movie at any time, all movies go unattended and Alex just suffers a loss of Rs 400.

The total profit for all 5 days is $575+525-25-200-400 = 475$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>