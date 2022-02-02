---
{"category_name":"medium","problem_code":"CHEFGORO","problem_name":"Chef Goro","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"15-04-2018","tags":{"0":"alei","1":"bitmask","2":"cook93","3":"medium","4":"precomputation","5":"topology"},"editorial_url":"https://discuss.codechef.com/problems/CHEFGORO","time":{"view_start_date":1524421800,"submit_start_date":1524421800,"visible_start_date":1524421800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problem statement in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/mandarin/CHEFGORO.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK93/vietnamese/CHEFGORO.pdf">Vietnamese</a>.</h3>

Suzumo is the apprentice of Chef Goro. Today, there is a big contest in CodeChef. The contest has $J$ judges, so they have to prepare $J$ dishes, one for each judge.

Before preparing the dishes, Suzumo collects all the ingredients; for simplicity, the ingredients are labeled $1$ through $M$.

Chef Goro has many hands. Each of his hands can only take all ingredients from a specific subset; also, if one of his hands can take all ingredients from a set $A$ and another hand can take all ingredients from a set $B$, then he has a hand which can take all ingredients from their intersection $A \cap B$. Moreover, it is known that Goro has a hand which can take all the ingredients (it exists, even if it's not listed in input).

Goro has so many hands that it is inconvenient to describe all of them in the input. Therefore, you are only given information on $N$ of his hands. Goro said that using that information, it is possible to generate all of his remaining hands. For each $i$ ($1 \le i \le N$), let's denote the set of ingredients taken by the $i$-th hand by $S_i$.

To prepare the $i$-th dish (for each $1 \le i \le J$), Goro uses a recipe that consists of a set of ingredients $R_i$. Suzumo is in charge of preparing the *base* of the recipe, which is the set of all ingredients $x$ (not necessarily present in the recipe) such that no matter which hand Goro uses to take $x$, he will end up also taking another ingredient (different from $x$) that belongs to $R_i$.

Write a program to help Suzumo find the size of the base of each recipe.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows. 
- The first line of each test case contains three space-separated integers $M$, $N$ and $J$.
- For each valid $i$, the $i$-th of the following $N$ lines contains a single hexadecimal string encoding the set $S_i$ taken by the $i$-th of Goro's hands.
- For each valid $i$, the $i$-th of the following $J$ lines contains a single hexadecimal string encoding the recipe $R_i$.

A set described by a hexadecimal string $s$ can be decoded in the following way:
- each character of $s$ represents a number ($0$ through $15$); digits correspond to numbers $0$ through $9$ and letters 'a' through 'f' correspond to numbers $10$ through $15$
- compute the number corresponding to each character, convert it to binary representation as a binary string (little-endian, i.e. starting with the least significant bit) with length $4$ and concatenate these strings to form one binary string $b$ with length $4|s|$
- for each $i$ ($1 \le i \le 4|s|$), the resulting set contains $i$ if and only if $b_i$ is '1'

For example, for the string "bc", 'b' is converted to "1101", 'c' to "0011", the corresponding binary string is "11010011" and the decoded set is $\{1, 2, 4, 7, 8\}$.

### Output

For each recipe, print a single line containing one integer — the number of ingredients in the base of the recipe.

### Constraints 
- $1 \le T \le 50,000$
- $1 \le N, J \le 10^5$
- $1 \le M \le 100$
- each hexadecimal string contains only the following characters: digits '0' through '9' and lowercase letters 'a' through 'f'
- each decoded set $S_i$ contains only numbers $\le M$
- each decoded set $R_i$ contains only numbers $\le M$
- the sum of $N$ over all test cases is at most $10^5$
- the sum of $J$ over all test cases is at most $10^5$

### Example Input
```
1
5 4 2
1
d
f
31
21
7
```

### Example Output
```
1
4
```
	
### Explanation

**Example case 1:** Goro has the following hands: $\{1\}, \{1,3,4\}, \{1,2,3,4\}, \{1,2,5\}, \{1,2\}, \{1,2,3,4,5\}$. Note that the hand $\{1,2\}$ is not provided, but it can be generated as the intersection of $\{1,2,3,4\}$ and $\{1,2,5\}$.

In the first recipe, the base of $\{2,5\}$ is $\{5\}$. The hands that can take ingredient 5 are the 4-th and 6-th hand, and both of them also take ingredient 2, which belongs to the recipe.

In the second recipe $\{1,2,3\}$, the base is $\{2,3,4,5\}$. Ingredient 1 is not in the base, because the first hand can take only ingredient 1 without taking another ingredient from the recipe.
