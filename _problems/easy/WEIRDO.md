---
{"category_name":"easy","problem_code":"WEIRDO","problem_name":"From Zero to Infinity","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"akil_av17","problem_tester":null,"date_added":"1-09-2019","tags":{"0":"akil_av17","1":"challenge","2":"logarithm","3":"nov19","4":"watcher"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WEIRDO","time":{"view_start_date":1573464600,"submit_start_date":1573464600,"visible_start_date":1573464600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WEIRDO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV19/hindi/WEIRDO.pdf), [Bengali](https://www.codechef.com/download/translated/NOV19/bengali/WEIRDO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV19/mandarin/WEIRDO.pdf), [Russian](https://www.codechef.com/download/translated/NOV19/russian/WEIRDO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV19/vietnamese/WEIRDO.pdf) as well.

Alice and Bob created $N$ and $M$ recipes, respectively ($N, M \ge 1$), and submitted them to Chef for evaluation. Each recipe is represented by a string containing only lowercase English letters. Let's denote Alice's recipes by $A_1, A_2, \ldots, A_N$ and Bob's recipes by $B_1, B_2, \ldots, B_M$.

Accidentally, Chef mixed up those recipes ― now, he has $L = N+M$ recipes in a sequence $S_1, S_2, \ldots, S_L$. Thankfully, the recipes created by Alice and Bob are distinguishable from each other. It is well-known that for each recipe $s$ created by Alice, the following property holds, and for each recipe created by Bob, it does not hold: For each $1 \le l \lt r \le |s|$, the substring $s_l, s_{l+1}, \ldots, s_r$ contains at least as many vowels as consonants. The letters 'a', 'e', 'i', 'o', 'u' are vowels, while the other letters are consonants.

The score of a candidate who made $K$ recipes is calculated as the product of $\frac{x_c}{fx_c^K}$ for all letters $c$ that occur in at least one of these recipes; here, $x_c$ is the number of recipes which contain the letter $c$ and $fx_c$ is the total number of occurrences of this letter in all $K$ recipes.

Let's denote the scores of Alice and Bob by $sc_A$ and $sc_B$ respectively. Chef wants to know their ratio $sc_A/sc_B$. We know that Chef is a legendary cook, but he is not very good at calculating, so he is asking you to find that number.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $L$.
- $L$ lines follow. For each valid $i$, the $i$-th of these lines contains a single string $S_i$.

### Output
For each test case, if the ratio of scores exceeds $10^7$, print a single line containing the string `"Infinity"` (without quotes); otherwise, print a single line containing one real number $sc_A/sc_B$.

Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$. It is guaranteed that $sc_A/sc_B$ does not lie in the range $10^7 \pm 10$.

### Constraints
- $1 \le T \le 10^5$
- $2 \le L \le 10^5$
- $2 \le |S_i| \le 10^5$ for each valid $i$
- for each valid $i$, $S_i$ contains only lowercase English letters
- the sum of $|S_1| + |S_2| + \ldots + |S_L|$ over all test cases does not exceed $10^7$

### Subtasks
**Subtask #1 (25 points):**
- $L \le 10$
- $|S_i| \le 10$ for each valid $i$

**Subtask #2 (75 points):** original constraints

### Example Input
```
2
4
aba
abc
bab
aac
3
aba
baab
abc
```

### Example Output
```
1.1250000
0.0277778
```

### Explanation
**Example case 1:** The recipes "aba" and "aac" are created by Alice, while the recipes "abc" and "bab" are created by Bob. The scores are:
- $sc_A = \frac{x_a}{fx_a^N} \cdot \frac{x_b}{fx_b^N} \cdot \frac{x_c}{fx_c^N} = \frac{2}{4^2} \cdot \frac{1}{1^2} \cdot \frac{1}{1^2} = \frac{1}{8}$
- $sc_B = \frac{x_a}{fx_a^M} \cdot \frac{x_b}{fx_b^M} \cdot \frac{x_c}{fx_c^M} = \frac{2}{2^2} \cdot \frac{2}{3^2} \cdot \frac{1}{1^2} = \frac{1}{9}$
- $\frac{sc_A}{sc_B} = \frac{1/8}{1/9} = 1.125$

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>