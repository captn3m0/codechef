---
{"category_name":"easy","problem_code":"CROADS","problem_name":"Roads in Chefland","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n5","output":"3\r\n8","explanation":"**Example case 1:** We can connect city $1$ with city $3$ by a road with cost $1$ and city $3$ with city $2$ by a road with cost $2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pandey__ji","problem_tester":null,"date_added":"2-05-2020","tags":{"0":"ad","1":"akashbhalotia","2":"bit","3":"cook118","4":"easy","5":"number","6":"observation","7":"pandey__ji","8":"pandey__ji"},"problem_difficulty_level":"Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CROADS","time":{"view_start_date":1590345002,"submit_start_date":1590345002,"visible_start_date":1590345002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CROADS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK118/hindi/CROADS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK118/mandarin/CROADS.pdf), [Russian](https://www.codechef.com/download/translated/COOK118/russian/CROADS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK118/vietnamese/CROADS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK118/bengali/CROADS.pdf) as well.

In Chefland, there are $N$ cities (numbered $1$ through $N$). Initially, there are no roads between them. The Mayor of Chefland has ordered engineers to build roads across Chefland in such a way that each city is reachable from all other cities.

For each pair of distinct cities $i$ and $j$, the cost of building a road between these cities is equal to ($i \wedge j$), where $\wedge$ denotes the bitwise AND operation. However, leaders of the cities have a weird condition ― they only allow roads with positive costs to be built from their cities.

Help the Mayor find the minimum cost of building roads in the required way or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$. 

### Output
For each test case, print a single line containing one integer ― the minimum cost of building the roads or $-1$ if it is impossible.

### Constraints
- $1 \le T \le 2 \cdot 10^5$
- $2 \le N \le 10^9$

### Example Input
```
2
3
5
```

### Example Output
```
3
8
```

### Explanation
**Example case 1:** We can connect city $1$ with city $3$ by a road with cost $1$ and city $3$ with city $2$ by a road with cost $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>