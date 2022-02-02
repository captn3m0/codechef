---
{"category_name":"medium","problem_code":"EQDIV","problem_name":"Divide Candies","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"bohdan","problem_tester":"","date_added":"8-08-2020","tags":{"0":"bitset","1":"bohdan","2":"bohdan","3":"dynamic","4":"observation","5":"sept20"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/EQDIV","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EQDIV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/EQDIV.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/EQDIV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/EQDIV.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/EQDIV.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/EQDIV.pdf) as well.

There are $N$ heaps of candies (numbered $1$ through $N$); for each valid $i$, the $i$-th of them contains exactly $i^K$ candies. You aim to partition these heaps between you and your friend in such a way that each heap is given to exactly one of you without being split among you.

The distribution should be as fair as possible. Formally, let's denote the total number of candies you get by $A$ and the total number of candies your friend gets by $B$; your goal is to minimise $|A-B|$.

Find the smallest possible value of $|A-B|$ and assign the heaps to you and your friend in some way that minimises $|A-B|$. If there are multiple solutions, you may find any one of them.

### Input
- The first line of the input contains a single integer $K$, which is common for all test cases.
- The second line contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case, print two lines.
- The first of these lines should contain a single integer ― the smallest value of $|A-B|$ we can obtain.
- The second line should contain $N$ characters describing your assignment of heaps. For each valid $i$, the $i$-th of them should be '1' if you want to give the $i$-th heap to you or '0' if you want to give it to your friend.

### Constraints 
- $1 \le T \le 2,000$
- $1 \le K \le 4$
- $1 \le N \le 10^6$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^6$

### Subtasks
**Subtask #1 (5 points):** $K = 1$

**Subtask #2 (10 points):** $K = 2$

**Subtask #3 (15 points):** $K = 3$

**Subtask #4 (70 points):** $K = 4$

### Example Input 1
```
2
2
4
5
```

### Example Output 1
```
2
0001
3
01001
```

### Explanation
**Example case 1:** There are four heaps with sizes $1$, $4$, $9$ and $16$ and two optimal assignments: either give the last heap to yourself and the rest to your friend or vice versa (so both "0001" and "1110" would be considered correct outputs). In both cases, $|A-B| = |16 - (1 + 4 + 9)| = 2$.

**Example case 2:** There are five heaps with sizes $1$, $4$, $9$, $16$ and $25$. You can assign the second and fifth heap to yourself, and thus $|A-B| = |(25 + 4) - (16 + 9 + 1)| = 3$. It can be proved that this is the smallest possible value of $|A-B|$.

### Example Input 2
```
4
3
5
6
9
```

### Example Output 2
```
271
00001
317
000001
253
000001110
```

### Explanation
**Example case 3:** We have $K = 4$ and $N = 9$. The smallest value of $|A-B|$ is $|(6^4 + 7^4 + 8^4) - (1^4 + 2^4 + 3^4 + 4^4 + 5^4 + 9^4)| = |7793 - 7540|= 253$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>