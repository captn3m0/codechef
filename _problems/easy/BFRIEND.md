---
{"category_name":"easy","problem_code":"BFRIEND","problem_name":"Bob and His Friends","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 1 5 2\r\n6 7 8\r\n1 1 2 1000000000\r\n1000000000","output":"8\r\n2999999997","explanation":"**Example case 1:** In the optimal solution, Bob goes to his friend at floor $6$, changes there and goes to meet Alice. The total time is $(6-5)$ to reach his friend plus $2$ to change plus $(6-1)$ to reach Alice, which is $1+2+5 = 8$ minutes.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"noobie27","problem_tester":null,"date_added":"21-01-2020","tags":{"0":"cakewalk","1":"ltime80","2":"noobie27","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BFRIEND","time":{"view_start_date":1579971602,"submit_start_date":1579971602,"visible_start_date":1579971602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BFRIEND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME80/hindi/BFRIEND.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME80/bengali/BFRIEND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME80/mandarin/BFRIEND.pdf), [Russian](https://www.codechef.com/download/translated/LTIME80/russian/BFRIEND.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME80/vietnamese/BFRIEND.pdf) as well.

Alice just invited Bob to come over for dinner at her place. Bob is not dressed properly and he does not wish to take any chances, so he wants to rush to an apartment of one of his $N$ friends, change there and meet Alice for the dinner.

Alice and Bob's friends live in a skyscraper with many floors. Alice lives on the $a$-th floor, the apartments of Bob's friends are located on the floors $F_1, F_2, \ldots, F_N$ and Bob is initially at the $b$-th floor. It takes exactly $1$ minute to go one floor up or down from each floor.

Bob needs exactly $c$ minutes to change in any of his friends' apartments. Find the minimum time he needs to go to one of his friends' apartments, change and get to Alice's apartment.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains four space-separated integers $N$, $a$, $b$ and $c$.
- The second line contains $N$ space-separated integers $F_1, F_2, \ldots, F_N$.

### Output
Print a single line containing one integer ― the minimum time Bob needs.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le a, b, c \le 10^9$
- $1 \le F_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
3 1 5 2
6 7 8
1 1 2 1000000000
1000000000
```

### Example Output
```
8
2999999997
```

### Explanation
**Example case 1:** In the optimal solution, Bob goes to his friend at floor $6$, changes there and goes to meet Alice. The total time is $(6-5)$ to reach his friend plus $2$ to change plus $(6-1)$ to reach Alice, which is $1+2+5 = 8$ minutes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>