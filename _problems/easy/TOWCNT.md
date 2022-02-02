---
{"category_name":"easy","problem_code":"TOWCNT","problem_name":"Tower Counting","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n10 4\r\n0 2 5\r\n1 5 6\r\n1 8 8\r\n0 11 2","output":"2 3 2 3","explanation":"**Example case 1:** ![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK117/TOWCNT/TOWCNT2.jpg)","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":null,"date_added":"1-04-2020","tags":{"0":"brute","1":"cook117","2":"easy","3":"precision","4":"rajarshi_basu","5":"smartnj","6":"sorting"},"problem_difficulty_level":"Easy","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/TOWCNT","time":{"view_start_date":1587407402,"submit_start_date":1587407402,"visible_start_date":1587407402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TOWCNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK117/hindi/TOWCNT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK117/mandarin/TOWCNT.pdf), [Russian](https://www.codechef.com/download/translated/COOK117/russian/TOWCNT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK117/vietnamese/TOWCNT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK117/bengali/TOWCNT.pdf) as well.

[Flappy Bird](https://codechef_shared.s3.amazonaws.com/download/Images/COOK117/TOWCNT/TOWCNT1.jpg) is on a screen with height $H$ pixels (a 2D plane where the $y$-axis corresponds to the vertical direction). There are $N$ vertical obstacles in the room (numbered $1$ through $N$); for each valid $i$, the coordinates of the *endpoint* of the $i$-th obstacle are $(x_i, a_i)$. There are two types of obstacles: 
- Type 0: A line segment between the points $(x_i, 0)$ and $(x_i, a_i)$, i.e. upwards from the floor.
- Type 1: A line segment between the points $(x_i, H)$ and $(x_i, a_i)$, i.e. downwards from the ceiling.

For each obstacle, you need to find the number of endpoints of other obstacles (not including itself) that are visible from its endpoint. Two endpoints are visible from each other if the line segment joining them does not intersect or touch any other obstacle. Note that each obstacle has exactly one endpoint.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $H$ and $N$.
- The following $N$ lines describe the obstacles. For each valid $i$, the $i$-th of these lines contains three space-separated integers $t_i$, $x_i$ and $a_i$, where $t_i$ is the type of the $i$-th obstacle.

### Output
For each test case, print a single line containing $N$ space-separated integers. For each valid $i$, the $i$-th of these integers should be the number of endpoints visible from the $i$-th endpoint.

### Constraints 
- $1 \le T \le 200$
- $1 \le H \le 10^9$
- $1 \le N \le 2,000$
- $t_i \in \{0, 1\}$ for each valid $i$
- $1 \le x_i \le 10^9$ for each valid $i$
- $1 \le a_i \le H-1$ for each valid $i$
- no two obstacles touch or intersect
- the sum of $N$ over all test cases does not exceed $20,000$

### Example Input
```
1
10 4
0 2 5
1 5 6
1 8 8
0 11 2
```

### Example Output
```
2 3 2 3
```

### Explanation
**Example case 1:** ![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK117/TOWCNT/TOWCNT2.jpg)
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>