---
{"category_name":"school","problem_code":"DIET","problem_name":"Chef Diet","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4 5\r\n7 3 6 5\r\n3 4\r\n3 10 10\r\n3 4\r\n8 1 1","output":"YES\r\nNO 1\r\nNO 3","explanation":"**Example case 1:** On the first day, Chef buys $7$ grams, eats $5$ and stores $2$ grams for later. On the second day, he buys $3$ grams, so he has $5$ grams, which is just enough for the dinner on this day. On the third day, he buys $6$ grams, eats $5$ and stores $1$, and on the fourth day, he buys $5$ grams, so he has $6$ grams — enough for dinner. In the end, he had enough protein to eat during all four dinners.\r\n\r\n**Example case 2:** Chef needs to eat $4$ grams of protein on the first day, but he only has $3$ grams, so he does not have a sufficient amount of protein already for the first dinner.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/pkuZd56MHXQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"","date_added":"17-11-2019","tags":{"0":"cakewalk","1":"cook112","2":"kingofnumbers","3":"simulation","4":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DIET","time":{"view_start_date":1574015400,"submit_start_date":1574015400,"visible_start_date":1574015400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DIET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK112/hindi/DIET.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK112/mandarin/DIET.pdf), [Russian](https://www.codechef.com/download/translated/COOK112/russian/DIET.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK112/vietnamese/DIET.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK112/bengali/DIET.pdf) as well.

Chef decided to go on a diet during the following $N$ days (numbered $1$ through $N$). Part of the diet plan is to eat $K$ grams of protein during each day. For each valid $i$, Chef wants to buy $A_i$ grams of protein in the morning of the $i$-th day and then eat $K$ grams of protein as part of his dinner. If he has any protein remaining, he can store it and use it in later dinners. Initially, Chef is storing $0$ grams of protein.

Determine whether Chef will have enough protein all the time during his diet. In case he will not have enough, find the first day on which Chef will be unable to eat $K$ grams of protein.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$. 
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case:
- If Chef will have enough protein during his diet, print a single line containing the string `"YES"`.
- Otherwise, print a single line containing the string `"NO"`, followed by a space and one integer — the first day when Chef will be unable to eat $K$ grams of protein.

### Constraints
- $1 \le T \le 200$
- $1 \le N \le 100$
- $1 \le K \le 10^6$
- $1 \le A_i \le 10^6$ for each valid $i$

### Example Input
```
3
4 5
7 3 6 5
3 4
3 10 10
3 4
8 1 1
```

### Example Output
```
YES
NO 1
NO 3
```

### Explanation
**Example case 1:** On the first day, Chef buys $7$ grams, eats $5$ and stores $2$ grams for later. On the second day, he buys $3$ grams, so he has $5$ grams, which is just enough for the dinner on this day. On the third day, he buys $6$ grams, eats $5$ and stores $1$, and on the fourth day, he buys $5$ grams, so he has $6$ grams — enough for dinner. In the end, he had enough protein to eat during all four dinners.

**Example case 2:** Chef needs to eat $4$ grams of protein on the first day, but he only has $3$ grams, so he does not have a sufficient amount of protein already for the first dinner.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>