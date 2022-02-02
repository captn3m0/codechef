---
{"category_name":"medium","problem_code":"DOOFST","problem_name":"Doofish Set","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 3\n1 2\n1 3\n2 3","output":"2\n110\n100","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"14-08-2019","tags":{"0":"anand20","1":"depth","2":"kmaaszraa","3":"long_challenge","4":"sept19"},"problem_difficulty_level":"Medium","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/DOOFST","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DOOFST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/DOOFST.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/DOOFST.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/DOOFST.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/DOOFST.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/DOOFST.pdf) as well.

Dr.D has invented yet another -inator: the hateinator. He wants to test it on a group of $N$ people (numbered $1$ through $N$). The hateinator may be used any number of times; to use it once, Dr.D should divide these $N$ people into two groups and press the fire button on the hateinator. We call each such grouping a *Doofish set*. Afterwards, there will be hatred between each two people who were in different groups. The hatred does not disappear ― any two people that hate each other before the hateinator is used still hate each other afterwards.

The hateinator uses a lot of power. Let's denote the number of times it is used by $K$. Then, it consumes $K \cdot N$ units of power. Dr.D cannot afford to use the hateinator if this number exceeds $10^6$.

Dr.D has done the math and computed the most evil hatred system: a situation with some $M$ pairs of people who hate each other. You are given these pairs. There must not be any other pair of people who hate each other. Initially, there is no hatred between these $N$ people. Now, Dr.D is wondering: is it possible to use the hateinator to create this most evil system? If it is, what is the minimum number of times he needs to use it and with which Doofish sets? Help Dr.D find the answers.

### Input
- The first line of the input contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $a_i$ and $b_i$ denoting that people $a_i$ and $b_i$ should hate each other.

### Output
If there is no way to achieve Dr.D's plan or the required amount of power exceeds $10^6$, print a single line containing the integer $-1$.

Otherwise, first, print a line containing one integer $K$ ― the minimum number of times Dr.D needs to use the hateinator. Then, print $K$ lines; each of these lines should contain a string describing a Doofish set for one use of the hateinator.

A string $S$ describes a Doofish set if it contains exactly $N$ characters and each of these characters is '0' or '1'. A Doofish set is a pair of groups. For each valid $i$, if the $i$-th character of $S$ is '1', the $i$-th person is in the first group and if it is '0', this person is in the second group.

### Constraints
- $1 \le N \le 10^5$
- $0 \le M \le 2 \cdot 10^5$
- $1 \le a_i, b_i \le N$ for each valid $i$

### Subtasks
**Subtask 1 (30 points):** $M = N \cdot (N - 1) / 2$

**Subtask 2 (70 points):** original constraints

### Example Input
```
3 3
1 2
1 3
2 3
```

### Example Output
```
2
110
100
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>