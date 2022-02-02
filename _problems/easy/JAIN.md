---
{"category_name":"easy","problem_code":"JAIN","problem_name":"Chef got Recipes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iamabjain","problem_tester":null,"date_added":"19-05-2017","tags":{"0":"bitmasking","1":"iamabjain","2":"march19","3":"maths","4":"simple","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/JAIN","time":{"view_start_date":1552469402,"submit_start_date":1552469402,"visible_start_date":1552469402,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAR19TST/hindi/JAIN.pdf), [Bengali](http://www.codechef.com/download/translated/MAR19TST/bengali/JAIN.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAR19TST/mandarin/JAIN.pdf), [Russian](http://www.codechef.com/download/translated/MAR19TST/russian/JAIN.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAR19TST/vietnamese/JAIN.pdf) as well.

Chef has $N$ dishes, numbered $1$ through $N$. For each valid $i$, dish $i$ is described by a string $D_i$ containing only lowercase vowels, i.e. characters 'a', 'e', 'i', 'o', 'u'.

A *meal* consists of exactly two dishes. Preparing a meal from dishes $i$ and $j$ ($i \neq j$) means concatenating the strings $D_i$ and $D_j$ in an arbitrary order into a string $M$ describing the meal. Chef *likes* this meal if the string $M$ contains each lowercase vowel at least once.

Now, Chef is wondering - what is the total number of (unordered) pairs of dishes such that he likes the meal prepared from these dishes?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a single string $D_i$.

### Output
For each test case, print a single line containing one integer - the number of ways to prepare a meal Chef likes.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le |D_i| \le 1,000$ for each valid $i$
- the sum of all |D_i| over all test cases does not exceed $3 \cdot 10^7$

### Subtasks
**Subtask #1 (20 points):**
- $1 \le T \le 100$
- $1 \le N \le 100$
- the sum of all |D_i| over all test cases does not exceed $20000$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
3
aaooaoaooa
uiieieiieieuuu
aeioooeeiiaiei
```

### Example Output
```
2
```

### Explanation
**Example case 1:** There are three possible meals:
- A meal prepared from dishes $1$ and $2$ (for example "aaooaoaooauiieieiieieuuu") contains all vowels.
- A meal prepared from dishes $1$ and $3$ (for example "aaooaoaooaaeioooeeiiaiei") does not contain 'u'.
- A meal prepared from dishes $2$ and $3$ (for example "uiieieiieieuuuaeioooeeiiaiei") contains all vowels.
