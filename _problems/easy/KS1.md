---
{"category_name":"easy","problem_code":"KS1","problem_name":"Guddu and his Mother","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n3\n5 2 7","output":2,"explanation":"**Example case 1:** The triples are $(1, 3, 3)$, since $5 \\oplus 2 = 7$, and $(1, 2, 3)$, since $5 = 2 \\oplus 7$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/QavUaDRgAVk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kartik_354","problem_tester":"","date_added":"24-04-2019","tags":{"0":"aug19","1":"easy","2":"kartik_354","3":"math","4":"xor"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/KS1","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KS1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/KS1.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/KS1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/KS1.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/KS1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/KS1.pdf) as well.

Guddu was participating in a programming contest. He only had one problem left when his mother called him for dinner. Guddu is well aware how angry his mother could get if he was late for dinner and he did not want to sleep on an empty stomach, so he had to leave that last problem to you. Can you solve it on his behalf?

For a given sequence of positive integers $A_1, A_2, \ldots, A_N$, you are supposed to find the number of triples $(i, j, k)$ such that $1 \le i \lt j \le k \le N$ and

$$A_i \oplus A_{i+1} \oplus \ldots \oplus A_{j-1} = A_j \oplus A_{j+1} \oplus \ldots \oplus A_k \,,$$

where $\oplus$ denotes bitwise XOR.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of triples.

### Constraints
- $1 \le T \le 10$
- $2 \le N \le 10^5$
- $1 \le A_i \le 10^6$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le T \le 5$
- $1 \le N \le 100$

**Subtask #2 (30 points):**
- $1 \le T \le 5$
- $1 \le N \le 1,000$

**Subtask #3 (50 points):** original constraints

### Example Input
```
1
3
5 2 7
```

### Example Output
```
2
```

### Explanation
**Example case 1:** The triples are $(1, 3, 3)$, since $5 \oplus 2 = 7$, and $(1, 2, 3)$, since $5 = 2 \oplus 7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>