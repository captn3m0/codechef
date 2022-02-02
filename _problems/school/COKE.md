---
{"category_name":"school","problem_code":"COKE","problem_name":"Chef Drinks Coke","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3 2 5 4 6\n1 6\n2 8\n8 10\n3 5 10 20 30\n21 20\n22 22\n23 23","output":"8\n-1","explanation":"**Example case 1:** Chef should buy the second can (with price $8$), even though the first can is cheaper. If Chef bought the first can, its temperature would be $3$ when he got home, and that is outside the range $[4, 6]$.\n\n**Example case 2:** No matter which can Chef buys, when he gets home, its temperature will be less than $20$, so there is no suitable can available in the store.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"17-08-2019","tags":{"0":"cook109","1":"kingofnumbers","2":"math","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COKE","time":{"view_start_date":1566153002,"submit_start_date":1566153002,"visible_start_date":1566153002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COKE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK109/hindi/COKE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK109/mandarin/COKE.pdf), [Russian](https://www.codechef.com/download/translated/COOK109/russian/COKE.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK109/vietnamese/COKE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK109/bengali/COKE.pdf) as well.

Chef went to the store in order to buy one can of coke. In the store, they offer $N$ cans of coke (numbered $1$ through $N$). For each valid $i$, the current temperature of the $i$-th can is $C_i$ and its price is $P_i$.

After buying a can of coke, Chef wants to immediately start walking home; when he arrives, he wants to immediately drink the whole can. It takes Chef $M$ minutes to get home from the store.

The ambient temperature outside is $K$. When a can of coke is outside, its temperature approaches the ambient temperature. Specifically, if its temperature is $t$ at some point in time:
- if $t \gt K+1$, then one minute later, its temperature will be $t-1$
- if $t \lt K-1$, then one minute later, its temperature will be $t+1$
- if $K-1 \le t \le K+1$, then one minute later, its temperature will be $K$

When Chef drinks coke from a can, he wants its temperature to be between $L$ and $R$ (inclusive). Find the cheapest can for which this condition is satisfied or determine that there is no such can.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains five space-separated integers $N$, $M$, $K$, $L$ and $R$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $C_i$ and $P_i$.

### Output
For each test case, print a single line containing one integer — the price of the can Chef should buy, or $-1$ if it is impossible to buy a can such that Chef's condition is satisfied.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 100$
- $1 \le M \le 100$
- $|C_i| \le 50$ for each valid $i$
- $|K| \le 50$
- $-50 \le L \le R \le 50$
- $1 \le P_i \le 10^6$ for each valid $i$

### Example Input
```
2
3 2 5 4 6
1 6
2 8
8 10
3 5 10 20 30
21 20
22 22
23 23
```

### Example Output
```
8
-1
```
	
### Explanation
**Example case 1:** Chef should buy the second can (with price $8$), even though the first can is cheaper. If Chef bought the first can, its temperature would be $3$ when he got home, and that is outside the range $[4, 6]$.

**Example case 2:** No matter which can Chef buys, when he gets home, its temperature will be less than $20$, so there is no suitable can available in the store.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>