---
languages_supported:
    - NA
title: DDILEMMA
category: NA
old_version: true
problem_code: DDILEMMA
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

One of our businesses involves selling domain names. To that effect, we have an online interface where potential buyers of domain names can check the availability of domain names, and find out how much it is going to cost them.

[Domain tasting](http://en.wikipedia.org/wiki/Domain_tasting) is a frowned upon practice in our industry wherein people register domain names that are typos of existing domain names in order to make money through displaying ads to the traffic received on these typos. For instance if one were to register "directo.com" one could potentially get traffic from people who were trying to reach "directi.com" but instead mis-typed the last character.

In order to disincentivize tasters from registering typos of existing domain names, we wish to levy a surcharge on a domain name which is a typo of an existing domain name. The amount of surcharge would depend on the type and number of transformations required to convert an existing domain to a domain name that someone wishes to register.

The following type of transformations exist alongwith their cost -

1. If a transformation requires insertion of one character, it costs 1 point
2. If a transformation requires deletion of one character, it costs 1 point
3. If a transformation requires replacement of one character, it costs 2 points, except where the character being replaced and its replacement are adjacent to one another on the same line of a qwerty keyboard, in which case it costs 1 point


These operations can be performed in any order, so for example, to transform the domain name "directi" to "iriecti", we can either do a deletion of "d" in directi followed by an insertion of "i" or perform an insertion followed by the deletion. Similarly, "iriecti" can be transformed to "directi" by performing an insertion of "d" followed by a deletion of "i" or vice-versa.

For all domain name transformations that use 1 or 2 points, we wish to impose a surcharge of 50 and 25 cents respectively. Any domain name that requires more than 2 points will have no surcharge imposed upon them.

### Input

The input starts with a line containing 2 space separated integers m & n followed by a blank line. m is the number of already registered domain names. n is the list of names that a customer wishes to register - (1 m 2500) (1 n 7000). The next m lines are the already registered domain names. This is followed by a blank line. The next n lines are the list of names to be registered. There will be no space in the domain names, and they will consist only of a combination of lowercase alphabets from a to z and digits. The length of a domain name will be less than 31 characters.

### Output

The output must consist of n lines. You need to print the maximum surcharge incurred for registering a particular domain when compared with all the already registered domain names plus the log to the base 10 of the number of domain names that this domain name could be transformed to by using 1 or 2 points. The value printed should be the integral part of the sum in case it has a fractional part. If a domain has already been registered, you should output -1.

### Example

```

<b>Input:</b>
6 7

google
yahoo
rediff
rediffmail
direct
directi

direct
gallery
speaker
yahooo
gopgle
drect
direzti

<b>Output:</b>
-1
0
0
50
50
50
25


```