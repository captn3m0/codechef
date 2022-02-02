---
{"category_name":"medium","problem_code":"FRICAN","problem_name":"Friends and Candies","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3 3\n1 1 1\n0 2\n1 1\n0 2\n3 3\n1 1 1\n1 1\n1 1\n1 1","output":"3\n2","explanation":"**Example case 1:** We can give a candy from basket $1$ to the $2$-nd friend, a candy from basket $2$ to the $1$-st friend and a candy from basket $3$ to the $3$-rd friend.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":null,"date_added":"17-08-2019","tags":{"0":"cook109","1":"greedy","2":"i_love_islam","3":"medium","4":"observation","5":"taran_1407"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FRICAN","time":{"view_start_date":1566153002,"submit_start_date":1566153002,"visible_start_date":1566153002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FRICAN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK109/hindi/FRICAN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK109/mandarin/FRICAN.pdf), [Russian](https://www.codechef.com/download/translated/COOK109/russian/FRICAN.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK109/vietnamese/FRICAN.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK109/bengali/FRICAN.pdf) as well.

Hasan is preparing a party for his $M$ friends (numbered $1$ through $M$). He bought $N$ baskets of candies (numbered $1$ through $N$); for each valid $i$, the $i$-th basket contains $a_i$ candies.

Each friend should get at most one candy. For each valid $i$, the $i$-th friend would like to get a candy either from one of the first $L_i$ baskets or one of the last $R_i$ baskets, i.e. a from basket $b$ ($1 \le b \le N$) such that $b \le L_i$ or $b \ge N+1-R_i$.

Hasan loves his friends, so he wants as many of them as possible to get the candies they want. If he distributes the candies optimally, what is the maximum number of his friends who will get the candies they want?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
For each test case, print a single line containing one integer — the maximum number of Hasan's friends who can get the candies they want.

### Constraints
- $1 \le T \le 10^3$
- $1 \le N, M \le 10^6$
- $0 \le a_i \le 10^6$ for each valid $i$
- $0 \le L_i, R_i \le N$ for each valid $i$
- $0 \le L_i + R_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $M$ over all test cases does not exceed $10^6$

### Example Input
```
2
3 3
1 1 1
0 2
1 1
0 2
3 3
1 1 1
1 1
1 1
1 1
```

### Example Output
```
3
2
```

### Explanation
**Example case 1:** We can give a candy from basket $1$ to the $2$-nd friend, a candy from basket $2$ to the $1$-st friend and a candy from basket $3$ to the $3$-rd friend.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>