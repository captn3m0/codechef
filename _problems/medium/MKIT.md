---
{"category_name":"medium","problem_code":"MKIT","problem_name":"Make It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5 5 24\r\n6 3 12 2 8\r\n3 3\r\n2 4\r\n3 4\r\n1 3\r\n2 2","output":"11\r\n14\r\n11\r\n-1\r\n14","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"17-12-2019","tags":{"0":"cook113","1":"dynamic","2":"kmaaszraa","3":"kmaaszraa","4":"medium"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/MKIT","time":{"view_start_date":1577041202,"submit_start_date":1577041202,"visible_start_date":1577041202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MKIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK113/hindi/MKIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK113/mandarin/MKIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK113/russian/MKIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK113/vietnamese/MKIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK113/bengali/MKIT.pdf) as well.

Roger is the mayor of a city with $N$ citizens (numbered $1$ through $N$). On each day, each citizen has to pay a tax; let's denote the tax paid by the $i$-th citizen by $A_i$.

One day, Roger was extremely bored, so he decided to start a return-tax-for-fun program. The program is simple: on each day, Roger picks some non-empty group of citizens and returns to them the taxes they paid that day. However, picking some random citizens is not very fun, and Roger has always been fond of the number $K$ and its multiples, so he decided to only pick groups of citizens such that the product of the taxes returned to them is a multiple of $K$. Among all such choices, he picks a group which minimises the sum of the returned taxes (he does not want to waste too much money).

We know that Roger is a moody person. Sometimes, he chooses two integers $1 \le L \le R \le N$ and decides that he will not consider the citizens numbered $L$ through $R$ for the return-tax-for-fun program, i.e. the sum of returned taxes should be the smallest possible among all groups that do not contain any of these citizens. Roger told Melanie, his secretary, to do all the work and report to him the smallest sum of taxes that should be returned. Now, Melanie is looking for your help.

You should answer $Q$ queries. In each query, you are given the integers $L$ and $R$ and you should compute the smallest sum of taxes that should be returned or determine that there is no way to choose a group of citizens such that the product of the taxes returned to them is a multiple of $K$. Note that the queries are independent — a citizen that is not considered for the return-tax-for-fun program in one query may be considered for the program again in subsequent queries.

### Input
- The first line of the input contains three space-separated integers $N$, $Q$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $L$ and $R$ describing a query.

### Output
For each query, print a single line containing one integer — the smallest returned sum, or $-1$ if it is impossible to pick a valid group of citizens.

### Constraints
- $1 \le N, Q \le 10^5$
- $1 \le K \le 10^8$
- $1 \le A_i \le 10^8$ for each valid $i$
- $1 \le L \le R \le N$

### Example Input
```
5 5 24
6 3 12 2 8
3 3
2 4
3 4
1 3
2 2
```

### Example Output
```
11
14
11
-1
14
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>