---
{"category_name":"easy","problem_code":"CHEFING","problem_name":"Chef and Secret Ingredients","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"adityad1998","problem_tester":null,"date_added":"24-01-2019","tags":{"0":"adityad1998","1":"data","2":"feb19","3":"simple","4":"string"},"editorial_url":"https://discuss.codechef.com/problems/CHEFING","time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/FEB19TST/hindi/CHEFING.pdf), [Bengali](http://www.codechef.com/download/translated/FEB19TST/bengali/CHEFING.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/FEB19TST/mandarin/CHEFING.pdf), [Russian](http://www.codechef.com/download/translated/FEB19TST/russian/CHEFING.pdf), and [Vietnamese](http://www.codechef.com/download/translated/FEB19TST/vietnamese/CHEFING.pdf) as well.

Chef recently visited ShareChat Cafe and was highly impressed by the food. Being a food enthusiast, he decided to enquire about the ingredients of each dish.

There are $N$ dishes represented by strings $S_1, S_2, \ldots, S_N$. Each ingredient used for making dishes in ShareChat Cafe is represented by a lowercase English letter. For each valid $i$, the ingredients used to make dish $i$ correspond to characters in the string $S_i$ (note that ingredients may be used multiple times). A *special ingredient* is an ingredient which is present in each dish at least once.

Chef wants to know the number of special ingredients in ShareChat Cafe. Since Chef is too busy with work, can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string $S_i$.

### Output
For each test case, print a single line containing one integer ― the number of special ingredients in the dishes.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 1,000$
- $1 \le |S_i| \le 200$ for each valid $i$
- $S_1, S_2, \ldots, S_N$ contain only lowercase English letters
- The sum of length of strings over all test cases $\le$ 3500000

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
3
abcaa
bcbd
bgc
3
quick
brown
fox
```

### Example Output
```
2
0
```

### Explanation
**Example case 1:** Ingredients 'b' and 'c' are present in all three dishes, so there are two special ingredients.

**Example case 2:** No ingredient is common to all three dishes.
