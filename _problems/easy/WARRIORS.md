---
{"category_name":"easy","problem_code":"WARRIORS","problem_name":"Warriors","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n3 4\n1 2 1\n10\n2\n3\n1","output":"3\n2\n3\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"15-08-2019","tags":{"0":"cook109","1":"erfaniaa","2":"greedy","3":"medium","4":"precision","5":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WARRIORS","time":{"view_start_date":1566153002,"submit_start_date":1566153002,"visible_start_date":1566153002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WARRIORS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK109/hindi/WARRIORS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK109/mandarin/WARRIORS.pdf), [Russian](https://www.codechef.com/download/translated/COOK109/russian/WARRIORS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK109/vietnamese/WARRIORS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK109/bengali/WARRIORS.pdf) as well.

You are a warrior and you have to fight $N$ enemy warriors (numbered $1$ through $N$) one by one, in any order you choose. You have to win as many of these fights as possible.

Each warrior has some amount of power, which changes when the warrior fights. For each $i$, the $i$-th enemy warrior has power $P_i$. When you have power $x$ and you fight an enemy warrior with power $y$, the following happens:
- if $x \gt y$, you kill the enemy warrior and your power changes to $2(x-y)$
- otherwise (if $x \le y$), the enemy warrior kills you

You should answer $Q$ queries. In each query, you are given your initial power $X$ and you should find the maximum number of warriors you can kill if you are starting with power $X$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.
- $Q$ lines follow. Each of these lines contains a single integer $X$ describing a query.

### Output
For each query, print a single line containing one integer — the maximum number of warriors you can kill.

### Constraints 
- $1 \le T \le 10$
- $1 \le N, Q \le 10^5$
- $1 \le P_i \le 10^9$ for each valid $i$
- $1 \le X \le 10^9$

### Example Input
```
1
3 4
1 2 1
10
2
3
1
```

### Example Output
```
3
2
3
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>