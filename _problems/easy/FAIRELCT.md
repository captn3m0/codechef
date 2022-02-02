---
{"category_name":"easy","problem_code":"FAIRELCT","problem_name":"Fair Elections","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 3\r\n2 2\r\n5 5 5\r\n4 3\r\n1 3 2 4\r\n6 7 8","output":"2\r\n1","explanation":"**Example case 1:** We can perform two swaps ? each time, we swap a pack of $2$ votes from $A$ and a pack of $5$ votes from $B$. After that, John Jackson gets $5+5 = 10$ votes and Jack Johnson gets $2+2+5 = 9$ votes.\r\n\r\n**Example case 2:** We can swap the pack of $1$ vote from $A$ and the pack of $8$ votes from $B$. After that, John Jackson gets $8+3+2+4 = 17$ votes and Jack Johnson gets $6 + 7 + 1 = 14$ votes.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xy1QRTxxqkc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vegann","problem_tester":"","date_added":"21-12-2020","tags":{"0":"cakewalk","1":"greedy","2":"jan21","3":"vegann"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FAIRELCT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FAIRELCT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/FAIRELCT.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/FAIRELCT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/FAIRELCT.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/FAIRELCT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/FAIRELCT.pdf) as well.

Elections are coming soon. This year, two candidates passed to the final stage. One candidate is John Jackson and his opponent is Jack Johnson.

During the elections, everyone can vote for their favourite candidate, but no one can vote for both candidates. Then, packs of votes which went to the same candidate are formed. You know that for John Jackson, there are $N$ packs containing $A_1, A_2, \ldots, A_N$ votes, and for Jack Johnson, there are $M$ packs containing $B_1, B_2, \ldots, B_M$ votes.

The winner is the candidate that has strictly more votes than the other candidate; if both have the same number of votes, there is no winner. You are a friend of John Jackson and you want to help him win. To do that, you may perform the following operation any number of times (including zero): choose two packs of votes that currently belong to different candidates and swap them, i.e. change the votes in each of these packs so that they would go to the other candidate.

You are very careful, so you want to perform as few swaps as possible. Find the smallest number of operations you need to perform or determine that it is impossible to make John Jackson win.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $M$ space-separated integers $B_1, B_2, \ldots, B_M$.

### Output
For each test case, print a single line containing one integer ― the smallest number of swaps needed to make John Jackson win, or $-1$ if it is impossible.

### Constraints
- $1 \leq T \leq 10^3$
- $1 \le N, M \leq 10^3$
- $1 \leq A_i \leq 10^6$ for each valid $i$
- $1 \leq B_i \leq 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^4$
- the sum of $M$ over all test cases does not exceed $10^4$

### Subtasks
**Subtask #1 (20 points):**
- $A_1 = A_2 = \ldots = A_N$
- $B_1 = B_2 = \ldots = B_M$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
2 3
2 2
5 5 5
4 3
1 3 2 4
6 7 8
```

### Example Output
```
2
1
```

### Explanation
**Example case 1:** We can perform two swaps ― each time, we swap a pack of $2$ votes from $A$ and a pack of $5$ votes from $B$. After that, John Jackson gets $5+5 = 10$ votes and Jack Johnson gets $2+2+5 = 9$ votes.

**Example case 2:** We can swap the pack of $1$ vote from $A$ and the pack of $8$ votes from $B$. After that, John Jackson gets $8+3+2+4 = 17$ votes and Jack Johnson gets $6 + 7 + 1 = 14$ votes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>